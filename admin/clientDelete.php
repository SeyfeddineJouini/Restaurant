<?php
require_once 'secu_admin.php';
require_once '../connbd.php';
$delete=$_GET['delete'];
if(empty($delete)){
echo "you don't select any record";

}else{
$query="delete from client where id_client ='$delete'";
mysqli_query($conn,$query);
header("location:client_admin.php");

}
?>