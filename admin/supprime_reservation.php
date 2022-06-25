<?php 
require_once 'secu_admin.php';
require_once '../connbd.php';
if($_GET)
{  
     extract($_GET);
     $sql = "delete from reservation_table where id_reservation='$id' ";
     $requette=mysqli_query($conn,$sql);
     $_SESSION['reservation']='reservation supprimer';
     header('location:voir_reservation.php');



}




?>