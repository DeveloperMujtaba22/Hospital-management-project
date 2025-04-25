<?php 
session_start();
include('./connection.php');

$email = $_POST['email'];
$password = $_POST['password'];

if(isset($_POST['login'])){
    $query = "Select * from users where u_email = '$email' and password = md5('$password')";
    $result = mysqli_query($con , $query);

    if(!$result){
        echo "Query failed";
    }else{
        $_SESSION['email'] = $email; 
       $row = mysqli_num_rows($result);
       if($row == 1){
        while($row = mysqli_fetch_assoc($result)){
            if($row['role'] == 1){
                // echo "admin";
                header('location:./admin/index.php');
            }
            else{
                // echo "user";
                header('location:./index.php');
            }
           }
       }else{
            header('location:./login.php?msg=Invalid Credentails');
       }
    }

}

?>