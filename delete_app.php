<?php 
include('./connection.php');


if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "delete from appointment where app_id = '$id'";

    $result = mysqli_query($con , $query);
    if(!$result){
        echo "Query Failed";
    }else{
        header('location:./all_app.php');
    }
}

?>