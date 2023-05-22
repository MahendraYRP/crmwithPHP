<?php 
session_start();
include "connection.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `userlogin` WHERE username='$username' and password='$password'";
        $result= mysqli_query($con,$sql);
       $row = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        if($count>0){
           $_SESSION['username'] = $username;
                header('location:dashboard.php');
               }else{
                echo '<script>alert("Invalid username or password")</script>';
                
               }
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://yrpitsolutions.com/crm2//application/storage/icon/favicon.ico"> 
    <title>Logo In</title>
    <link rel="stylesheet" href="./css/login.css">
    <!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<!-- Nucleo Icons -->
<link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<!-- CSS Files -->
<link rel="stylesheet"  href="../assets/css/style.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    body{
        background-image: url(../assets/img/background.png);
    }
    </style>
<body >
        <div class="sign-in-wrapper">
            <div class="sign-in-inner">
                <div class="login-brand text-center">
                    <img class="logo" src="https://yrpitsolutions.com/crm2//application/storage/system/logo.png" alt="Logo">
                </div>
                <h2 style="margin: 15px 0;
                color: #1d1d1d;
                text-transform: uppercase;
                font-size: 3.3rem;">Hi! Welcome</h2>
                            <form class="login" method="post" action="">
                    <div class="form-group m-bottom-md">
                        <input type="text"  id="username" name="username" placeholder="   Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password"  id="password" name="password" placeholder="   Password">
                    </div>
                    <div class="m-top-md p-top-sm">
                        <button class="btn btn-primary sign-in" name="login"  type="submit">Log-in</button>
                    </div>
                </form>
                    </div>
                
            </div>


    </body>
</html>