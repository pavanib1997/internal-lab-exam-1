<?php 
include "connect1.php";
session_start();

if(isset($_POST['sub'])) {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "INSERT INTO `tbl_user` ( `user_email`, `password`) VALUES ( '$email', '$pass')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:login1.php');
    }
?>
