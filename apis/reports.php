<?php
header("content-type:application/json");
session_start();
include("../includes/db.php");

class report{
    Public $DBconn;
    public function __construct($conn) {
        $this->DBconn = $conn;
    }
    public function getreport(){
         $user_id=$_SESSION['user']['userid'];

        //  total income balnce and expnse
         $sql=$this->DBconn->prepare("SELECT 
            SUM(CASE WHEN type='income' THEN amount ELSE 0 END) as income,
            SUM(CASE WHEN type='expense' THEN amount ELSE 0 END) as expense
            FROM transactions WHERE user_id = ?
            AND MONTH(date) = MONTH(CURDATE())
            AND YEAR(date) = YEAR(CURDATE())");

          $sql->execute([$user_id]);
          $sum=$sql->fetch(PDO::FETCH_ASSOC);

        //  cetgory wise report
        $ctg=$this->DBconn->prepare("SELECT 
          category,COUNT(*) as total_transactions,
          SUM(amount) as total_amount FROM transactions WHERE user_id = ?
          AND type = 'expense' AND MONTH(date) = MONTH(CURDATE())
            AND YEAR(date) = YEAR(CURDATE()) GROUP BY category");
            
            $ctg->execute([$user_id]);        
            // $category->$ctg->fetch(PDO::FETCH_ASSOC);

           
            //lowest expense 
        $le=$this->DBconn->prepare("SELECT category,amount,
           date FROM transactions WHERE user_id = ? AND type = 'expense'
           AND MONTH(date) = MONTH(CURDATE()) AND YEAR(date) = YEAR(CURDATE())
           ORDER BY amount ASC LIMIT 1");
            
            $le->execute([$user_id]);


            //highest expense 
        $he=$this->DBconn->prepare("SELECT category,amount,
           date FROM transactions WHERE user_id = ? AND type = 'expense'
           AND MONTH(date) = MONTH(CURDATE()) AND YEAR(date) = YEAR(CURDATE())
           ORDER BY amount DESC LIMIT 1");
            
            $he->execute([$user_id]);


        //top expenses 
        $top=$this->DBconn->prepare("SELECT category,amount,note,
           date FROM transactions WHERE user_id = ? AND type = 'expense'
           AND MONTH(date) = MONTH(CURDATE()) AND YEAR(date) = YEAR(CURDATE())
           ORDER BY amount DESC LIMIT 5");
            
            $top->execute([$user_id]);


          echo json_encode([
            "income"=>$sum['income'],
            "expense"=>$sum['expense'],
            "balance"=>$sum['income']-$sum['expense'],
            "ctg"=>$ctg->fetchALL(PDO::FETCH_ASSOC),
            "lowexpense"=>$le->fetchALL(PDO::FETCH_ASSOC),
            "highexpense"=>$he->fetchALL(PDO::FETCH_ASSOC),
            "topxpenses"=>$top->fetchALL(PDO::FETCH_ASSOC),
          ]);
    }

}
$reports=new report($conn);
$reports->getreport();
?>