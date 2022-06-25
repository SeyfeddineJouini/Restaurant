<?php
require_once 'secu_admin.php';
require_once '../connbd.php';
if($_POST){
    extract($_POST);    
    
    $sql="INSERT INTO `admin`(`id`, `email`, `password`) VALUES ('','$email','$pass')";
    mysqli_query($conn,$sql);
    header('location:admin.php');

    }

?> 