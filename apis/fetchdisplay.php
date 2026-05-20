<?php
header("content-type:application/json");
session_start();
include("../includes/db.php");

class fetchanddisplay{
public $DBconn;
public function __construct($conn) {
    $this->DBconn = $conn;
}
function display(){
$user_id=$_SESSION['user']['userid'];

//totoal data 
$sql=$this->DBconn->prepare("SELECT 
SUM(CASE WHEN type='income' THEN amount ELSE 0 END) AS income,
SUM(CASE WHEN type='expense' THEN amount ELSE 0 END) AS expense
FROM transactions
WHERE user_id = ?");

$sql->execute([$user_id]);
$sum=$sql->fetch(PDO::FETCH_ASSOC);

//list
$list=$this->DBconn->prepare("SELECT * FROM transactions 
WHERE user_id = ?
ORDER BY id DESC LIMIT 5");
$list->execute([$user_id]);

$listall=$this->DBconn->prepare("SELECT * FROM transactions 
WHERE user_id = ?
ORDER BY id DESC");
$listall->execute([$user_id]);

echo json_encode([
    "income"=>$sum['income'],
    "expense"=>$sum['expense'],
    "balance"=>$sum['income']-$sum['expense'],
    "transactions"=>$list->fetchALL(PDO::FETCH_ASSOC),
    "alltransactions"=>$listall->fetchALL(PDO::FETCH_ASSOC)
]);
}

}
$display=new fetchanddisplay($conn);
$display->display();
?>