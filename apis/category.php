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
        $sql = $this->DBconn->prepare(
            "INSERT INTO category (user_id, category) VALUES (?, ?)"
        );

        return $sql->execute([
            $data["user_id"],$data["category"]
        ]);
    }
}

$cate = new category($conn);
$result = $cate->addcategory($data);

echo json_encode([
    "status" => $result ? "success" : "error"
]);