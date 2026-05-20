<?php
header("content-type:application/json");
session_start();
include("../includes/db.php");
$data=json_decode(file_get_contents("php://input"),true);

if (!$data) {
    echo json_encode([
        "status" => "error",
        "message" => "No data received"
    ]);
    exit;
}

class edit{
    public $DBconn;
    public function __construct($conn) {
        $this->DBconn = $conn;
    }

    function edittrans($data){
       $user_id=$_SESSION['user']['userid'];
$sql = $this->DBconn->prepare("
    UPDATE transactions 
    SET type = ?, amount = ?, category = ?, note = ?, date = ?
    WHERE id = ? AND user_id = ?
");

return $sql->execute([
    $data["type"],
    $data["amount"],
    $data["category"],
    $data["note"],
    $data["date"],
    $data["id"],
    $user_id
]);
}

}
$edittransactions = new edit($conn);
$result = $edittransactions->edittrans($data);

echo json_encode([
    "status" => $result ? "success" : "error"
]);

?>