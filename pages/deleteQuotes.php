<?php 

include "connection.php";


if(isset($_GET['deleteQuotesid'])){
$deleteQuotesid = $_GET['deleteQuotesid'];

$sql = "DELETE  FROM `quotes` where id = $deleteQuotesid";

$result = mysqli_query($con,$sql);

if($result){
    
    header('location:tables.php');
}else{
die(mysqli_error($con));
}

}



?>