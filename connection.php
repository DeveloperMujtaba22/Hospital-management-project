<?php 

$server = "localhost";
$user = "root";
$password = "";
$db = "hospital_management";


$con = mysqli_connect($server , $user , $password , $db);
if(!$con){
    die("Can't connect to db ".mysqli_connect_error());
}else{
    // echo "SuccessFully connected to DB";
}

?>