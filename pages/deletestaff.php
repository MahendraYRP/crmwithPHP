<?php 
include("connection.php");
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `user` WHERE id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "data is deleted";
        header('location:staff.php');
    }else{
        die(mysqli_error($con));
    }
}



?>