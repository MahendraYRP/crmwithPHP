<?php 

include "connection.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE from `employees` where id = $id";

    $result = mysqli_query($con,$sql);

    if ($result) {
       header("location:employees.php");
    }else{
       echo "data not deleted";
    }
}

?>