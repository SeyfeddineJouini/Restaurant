<?php
require_once 'secu_admin.php';
require_once '../connbd.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin/acceuil_admin.css">
    <link rel="stylesheet" href="../css/navbar.css">
    
    <title>Document</title>
</head>
<body style='background-color: #E9967A  ;'>
<div class="navbar"> 

        <ul id="nav">
            <li><a href="acceuil admin.php" >Acceuil</a></li>
            <li><a href="articles_admin.php">Article</a></li>
            <li><a href="voir_reservation.php">Reservations</a></li>
            <li><a href="commandes_admin.php">Commandes</a></li>
            <li><a href="voir_table.php">Les tables</a></li>
            <li><a href="client_admin.php">liste des clients</a></li>
            <li><a href="admin.php" >liste des administrateurs</a></li>
            <li><a href="../logout.php" style="color:red;">logout</a></li>
        </ul>
       
    </div>
<div class="container" style="border-radius: 1rem;">
<div class="bienvenu">
<div > <h1>Choisir la partie à gérer   </h1></div></div>
<div class="contant" style="margin-top:2rem;">       
                    <div style="width: 33.3333333333333333333333%;margin-bottom:1.5rem;"><a href="articles_admin.php" class="menu"><img src="../img/Capture d’écran 2021-05-08 235036.jpg" alt="non dispo"></a>
                        <p> Articles</p>
                        </div>
               
                    <div style="width: 33.3333333333333333333333%;margin-bottom:1.5rem;"> <a href="voir_reservation.php" class="menu"><img src="../img/Capture d’écran 2021-05-08 235046.jpg" alt="non dispo"></a><br>
                    <p>Résérvation</p></div>
                
           
        
                    <div style="width: 33.3333333333333333333333%;margin-bottom:1.5rem;"> <a href="commandes_admin.php" class="menu"><img src="../img/Capture d’écran 2021-05-08 235018.jpg" alt="non dispo"></a>
                    <p>Commandes</p></div>
                    <div style="width: 33.3333333333333333333333%;margin-bottom:1.5rem;"><a href="voir_table.php" class="menu"><img src="../img/Capture d’écran 2021-05-08 235201.jpg" alt="non dispo"></a>
                        <p> Table</p></div>
               
                    <div style="width: 33.3333333333333333333333%;margin-bottom:1.5rem;"><a href="client_admin.php" class="menu"><img src="../img/Capture d’écran 2021-05-08 235058.jpg" alt="non dispo"></a>
                    <p>Client</p></div>
                    
                    
                    
                    <div style="width: 33.3333333333333333333333%;margin-bottom:1.5rem;"> <a href="admin.php" class="menu"><img src="../img/Capture d’écran 2021-05-08 234538.jpg" alt="non dispo"></a><br>
                    <p>administrateur</p></div>
                    
           
        
                    
</div>
</div>
</body>
</html>