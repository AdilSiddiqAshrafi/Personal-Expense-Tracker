<?php
session_start();
header("Content-Type: application/json");
include("../includes/db.php");
$data = json_decode(file_get_contents("php://input"), true);

class search{
    public $DBconn;
    public function __construct($conn) {
        $this->DBconn = $conn;
    }

    public function search($data){
        // get user_id from session
         $user_id=$_SESSION['user']['userid'];
        $val = $data['val'] ?? '';
        $search = "%" . $val . "%";

         $query=$this->DBconn->prepare("SELECT * FROM transactions WHERE user_id = ? AND
          (category LIKE ? OR note LIKE ? OR type LIKE ? OR CAST(amount AS CHAR) LIKE ?)");
          $query->execute([$user_id,$search,$search,$search,$search]);

          $result=$query->fetchAll(PDO::FETCH_ASSOC);
          echo json_encode([
           "srchtrans" => $result
          ]);
    }
}
$srch=new search($conn);
$srch->search($data);
?>