<?php
include "connection.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `email` WHERE id=$id";

    $result = mysqli_query($con,$sql);

    if($result){
        // echo "data inserted successfully";
        header('location:TableSettings.php');
    }else{
    die(mysqli_error($con));
    }
}

?>