<?php 
include "connect1.php";
session_start();

if(isset($_POST['sub'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "INSERT INTO `tbl_user` ( `user_name`, `user_email`, `password`) VALUES ('$name', '$email', '$pass')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:login1.php');
    }
?>

