<?php
require_once '../connbd.php';
require_once 'secu.php';

$id_c=$_SESSION['user']['id_client'];
$id_art=$_SESSION['id_art'];
$_SESSION['valid']=true;
$sql="select * from article where id_article='$id_art'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
    if($_GET){
        extract($_GET);
        $quant=(int)$quantity;
        $query="insert into commande (id_commande,id_art,id_cli,quantity) values('','$id_art','$id_c','$quant')";
        mysqli_query($conn,$query);
        if(strcmp($row['type'],'plat principal')==0){
            header("location:dinner_client.php");}
            elseif(strcmp($row['type'],'dessert')==0){
                header("location:dessert_client.php");
            }
            elseif(strcmp($row['type'],'boissons')==0){
                
                header("location:drinks_client.php");
            }
            else{        
                header("location:entre_client.php");
            }
    
               }



?>