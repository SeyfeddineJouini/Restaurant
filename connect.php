<?php
session_start();
require_once "connbd.php";
if($_POST){
    extract($_POST);
    $root="select * from admin where email='$mail' and password='$pass'";
    $result1=$conn->query($root);
    if($result1->num_rows>0){
        $row=$result1->fetch_assoc();
        $_SESSION['user']=$row;
        $_SESSION['user']['type']=1;
    header('location:admin/acceuil admin.php');                
    }
    else {
    $sql="select * from client where email='$mail' and password='$pass'";
    $result=$conn->query($sql);
    
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        
            
        $_SESSION['user']['type']=0;
        $_SESSION['user']=$row;
            header('location:client/acceuil.php');
               
    }
    else{

        header('location:login.php');
        
    }
    }
    $conn->close();
}

?>

