<?php 
require_once 'secu_admin.php';
require_once '../connbd.php';
$delete=$_GET['delete'];
if(empty($delete)){
echo "you don't select any record";

}else{

     $sql = "delete from tables where num='$delete' ";
     mysqli_query($conn,$sql);
     header('location:voir_table.php');



}




?>