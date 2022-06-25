<?php 
require_once 'secu_admin.php';
require_once '../connbd.php';
if ($_POST)
{
    extract($_POST); 
   $var=mysqli_num_rows(mysqli_query($conn,"select * from tables where id_table='$nouveau_id'") );
   if ($var==0)
   {
   mysqli_query($conn,"insert into tables values('$nouveau_nbrp','$nouveau_id')");
   $_SESSION['aj']="table ajoutee";
   header('location:voir_table.php');
   }
   else{
    $_SESSION['aj']="id du table existe deja ";
    header('location:ajoute_table_admin.php');
   }
   

}

?>