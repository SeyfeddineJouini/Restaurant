<?php
require_once 'secu_admin.php';
require_once '../connbd.php';
$delete=$_GET['delete'];
if(empty($delete)){
echo "you don't select any record";

}else{
    $sql="select type from article where id_article='$delete'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
$query="delete from article where id_article ='$delete'";
mysqli_query($conn,$query);

if(strcmp($row['type'],'plat principal')==0){
    header("location:dinner_admin.php");}
    elseif(strcmp($row['type'],'dessert')==0){
        header("location:dessert_admin.php");
    }
    elseif(strcmp($row['type'],'boissons')==0){
        
        header("location:drinks_admin.php");
    }
    else{        
        header("location:entre_admin.php");
    }

}
?>