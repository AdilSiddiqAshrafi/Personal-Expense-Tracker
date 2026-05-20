<?php
header("content-type:application/json");
session_start();
include("../includes/db.php");

class fetchcategorys{
    public $DBconn;
    public function __construct($conn) {
        $this->DBconn = $conn;
    }

    function fetchcateg(){
    $user_id=$_SESSION['user']['userid'];
   $sql=$this->DBconn->prepare("SELECT * FROM category
WHERE user_id = ?");
 $sql->execute([$user_id]);
  return $sql->fetchAll(PDO::FETCH_ASSOC);
}

}
$categorys=new fetchcategorys($conn);
$data=$categorys->fetchcateg();

echo json_encode([
    "categorysss"=>$data
]);
?>