<?php
require_once '../connbd.php';
if($_POST)
{
    extract($_POST);
    $sql="insert into client (id_client,email,password,nom,prenom,num_tel,adresse) values('','$mail','$pass','$nom','$prenom','$num','$adresse')";
    mysqli_query($conn,$sql);
    header('location:../login.php');
}
?>