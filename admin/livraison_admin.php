<?php
require_once 'secu_admin.php';
require_once '../connbd.php';
    if($_GET){
       
        $id_c=$_GET['livraison'];
        $query="DELETE FROM commande
        WHERE id_commande='$id_c' ";
        mysqli_query($conn,$query);
        header("location:commandes_admin.php");
    }


?>