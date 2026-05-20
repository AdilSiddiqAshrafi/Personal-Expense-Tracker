<?php
header("content-type:application/json");
session_start();
include("../includes/db.php");
$data=json_decode(file_get_contents("php://input"),true);

class delete{
    public $DBconn;
    public function __construct($conn) {
        $this->DBconn = $conn;
    }

    function deletetransaction($data){
       $user_id=$_SESSION['user']['userid'];
       $tid=$data['id'] ?? null;

       if(!$tid || !is_numeric($tid)){
        echo json_encode(["error"=>"Invalid or missing ID"]);
        exit;
       }

        $sql=$this->DBconn->prepare("DELETE FROM transactions WHERE id = ? AND user_id = ?");
        return $sql->execute([$tid,$user_id]);
    }
}
$deldata=new delete($conn);
$res=$deldata->deletetransaction($data);

echo json_encode([
    "status"=>$res ? "success":"error"
]);

?>