<?php
require_once 'secu_admin.php';
require_once '../connbd.php';
$delete=$_GET['delete'];
if(empty($delete)){
echo "you don't select any record";

}else{
    $query="delete from admin where id ='$delete'";
mysqli_query($conn,$query);
header("location:admin.php");

}
?>