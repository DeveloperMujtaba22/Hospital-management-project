<?php 
session_start();
include('./connection.php');

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}

$name = $_POST['name'];
$app_date = $_POST['date'];
$speciality = $_POST['speciality'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$query = "insert into appointment (name , email , app_date , dr_speciality , phone , message ) values ('$name' , '$email' , '$app_date' , '$speciality' , '$phone' , '$message')";

$result = mysqli_query($con , $query);
if(!$result){
    echo "Query Failed";
}else{
    header('location:./index.php');
}






?>