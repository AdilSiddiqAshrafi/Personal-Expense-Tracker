<?php
session_start();
header("Content-Type: application/json");
include("../includes/db.php");
$data = json_decode(file_get_contents("php://input"), true);

// safety check
if (!$data) {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid or missing data"
    ]);
    exit;
}

class category {
    public $DBconn;
    public function __construct($conn) {
        $this->DBconn = $conn;
    }

    function addcategory($data) {
    $user_id=$_SESSION['user']['userid'];
    $category = $data["category"];
    $search = "%$category%";

        $sql = $this->DBconn->prepare(
            "SELECT * FROM transactions WHERE category LIKE ? AND user_id = ?");

           $sql->execute([$search, $user_id]);
          
    $list = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        "listctg" => $list
    ]);
          
    }
}

$cate = new category($conn);
$result = $cate->addcategory($data);
