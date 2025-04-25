<?php include('./connection.php') ?>

<?php

if(isset($_FILES['file'])){
    $file_name = $_FILES['file']['name']; 
    $file_size = $_FILES['file']['size']; 
    $file_tmp_name = $_FILES['file']['tmp_name']; 
    $file_type = $_FILES['file']['type']; 


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];


    if(move_uploaded_file($file_tmp_name , "./upload/".$file_name)){
        $query = "insert into users (u_name , u_email , phone , dob , image , password) values ('$name' , '$email' , '$phone' , '$dob' , '$file_name' , md5('$password'))";

        $result = mysqli_query($con , $query);

        if(!$result){
            echo "Query Failed";
        }else{
            echo "Query successfully fired";
        }

    }
}







?>