<?php
require_once 'secu_admin.php';
require_once '../connbd.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin/acceuil_admin.css">
    <link rel="stylesheet" href="../css/navbar.css">
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
    <div> <h1>Gérer les articles    </h1></div>
</div>
           
                <div class="contant">       
                    <div style="width: 25%;"><a href="entre_admin.php" class="menu"><img src="../img/entré.jpg" alt="non dispo"></a>
                        <p> Entré</p>
                        </div>
               
                    <div style="width: 25%;"> <a href="dinner_admin.php" class="menu"><img src="../img/plat.jpg" alt="non dispo"></a><br>
                    <p>plat principale</p></div>
                
           
        
                    <div style="width: 25%;"> <a href="dessert_admin.php" class="menu"><img src="../img/dessert.jpg" alt="non dispo"></a>
                    <p>Dessert</p></div>
               
                    <div style="width: 25%;"><a href="drinks_admin.php" class="menu"><img src="../img/drink.jpg" alt="non dispo"></a>
                    <p>Boissons</p></div>
</div>
</div>
</body>
</html>