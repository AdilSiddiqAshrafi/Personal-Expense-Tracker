<?php
session_start();
include("../includes/db.php");

class requests{
public $DBconn;

public function __construct($conn) {
    $this->DBconn = $conn;
}
function singup($request){
$name=$request['username'];
$name2=$request['username2'];
$password=password_hash($request['password'],PASSWORD_BCRYPT);  
// PASSWORD_BCRYPT and PASSWORD_DEFAULT  deault use best avalaible method and future prrof 
$email=$request['email'];

$query=$this->DBconn->prepare("INSERT INTO users (username, username2, password, email) VALUES (?, ?, ?, ?)");

// return $query->execute([$name,$name2,$password,$email]);

$result=$query->execute([$name,$name2,$password,$email]);

if($result){
    $userid=$this->DBconn->lastInsertId();
    $_SESSION['user']=["username"=>$name,"email"=>$email,"userid"=>$userid];
    print_r($_SESSION);
    header("location:../index.php");
    return true;
}else{
    return false;
}

}

function login($request){
$password=$request['password'];
$email=$request['email'];

$query=$this->DBconn->prepare("SELECT * FROM users WHERE email=?");
$result=$query->execute([$email]);

$user=$query->fetch(PDO::FETCH_ASSOC);
if($user){

if(password_verify($password,$user['password'])){
$_SESSION['user']=["userid"=>$user['id'],"email"=>$user['email'],"username"=>$user['username']];
header("location:../index.php");
exit;
}else{
    echo "wrong";
}
}else{
    echo "No User Found";
}

}
}


$req=new requests($conn);

if(isset($_POST['singup'])){
$req->singup($_POST);
}elseif(isset($_POST['login'])){
    $req->login($_POST);
}elseif(isset($_REQUEST['logout'])){
    session_unset();
    header("location:../index.php");
}
?>