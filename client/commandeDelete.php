<?php
require_once 'secu.php';
require_once '../connbd.php';
$delete=$_GET['delete'];
if(empty($delete)){
echo "you don't select any record";

}else{
$query="delete from commande where id_commande ='$delete'";
mysqli_query($conn,$query);
header("location:facture_client.php");

}
?>