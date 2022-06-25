<?php
require_once 'secu_admin.php';
require_once '../connbd.php';
if($_POST){
    extract($_POST);    
    
    $sql="INSERT INTO `article`(`id_article`,`designation`, `prix_unit`, `type`,`photo`) VALUES ('','$nom','$prix','$type','$photo')";
    mysqli_query($conn,$sql);
   
   
    if(strcmp($type,'plat principal')==0){
        header("location:dinner_admin.php");}
        elseif(strcmp($type,'dessert')==0){
            header("location:dessert_admin.php");
        }
        elseif(strcmp($type,'boissons')==0){
            
            header("location:drinks_admin.php");
        }
        else{        
            header("location:entre_admin.php");
        }
    
    }

    

?> 