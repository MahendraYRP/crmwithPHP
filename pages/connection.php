<?php 
$con = new mysqli ('localhost','root','','table');

if(!$con){
    die(mysqli_error($con));
}

?>