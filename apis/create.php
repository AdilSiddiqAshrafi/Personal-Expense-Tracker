<?php
header("content-type:application/json");
include("../includes/db.php");
$data=json_decode(file_get_contents("php://input"),true);

// stop if no data
if (!$data) {
    echo json_encode([
        "status" => "error",
        "message" => "No data received"
    ]);
    exit;
}

class add{
public $DBconn;

public function __construct($conn){
    $this->DBconn=$conn;
}

function createTransaction($data){
$sql=$this->DBconn->prepare("INSERT INTO transactions 
(user_id, type, amount, category, note, date)
VALUES
(?,?,?,?,?,?)");

return $sql->execute([$data["user_id"],$data["type"],$data["amount"],$data["category"],$data["note"],$data["date"]]);

}
}

$adddata=new add($conn);
$result=$adddata->createTransaction($data);  

echo json_encode([
    "status"=>$result ? "success":"error"
    ]);

?>