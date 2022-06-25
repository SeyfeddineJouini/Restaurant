<?php
require_once '../connbd.php';
//require_once 'secu.php';

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/menu_principal.css">
</head>
<body style="background-image:url('../img/Maenam_NYE2020_TAKEOUT_DSC05532_PhotoOctaneCollective-2.png   '); background-size: cover;">

    <div class="navbar"> 
       
        <ul id="nav">
            <li><a href="acceuil.php">Home</a></li>
            <li><a href="Menu_principal.php">Menu</a></li>
            <!--<li style="background-color: rgb(46, 45, 45);  "><a href="Reservation.php" style="background-color: rgb(46, 45, 45);  ">Reservation</a></li>-->
            <li><a href="facture_client.php" >Panier</a></li>
            <li><a href="abt_us.php" >Coordonnées</a></li>
            <li><a href="../logout.php" style="color:red;">logout</a></li>
        </ul>
       
    </div>
    <div class="container" style="border-radius: 1rem;">
    <div class="bienvenu">
    <div> <h1>Bienvenu Chez JAZZy   </h1></div>
    <div><h3>Trouvez tout ce dont vous avez besoin, parmi nos côtes</h3></div>
</div>
           
                <div class="contant">       
                    <div><a href="entre_client.php" class="menu"><img src="../img/entré.jpg" alt="non dispo"></a>
                        <p> Entré</p>
                        </div>
               
                    <div> <a href="dinner_client.php" class="menu"><img src="../img/plat.jpg" alt="non dispo"></a><br>
                    <p>Plat Principal</p></div>
                
           
        
                    <div> <a href="dessert_client.php" class="menu"><img src="../img/dessert.jpg" alt="non dispo"></a>
                    <p>Dessert</p></div>
               
                    <div><a href="drinks_client.php" class="menu"><img src="../img/drink.jpg" alt="non dispo"></a>
                    <p>Boissons</p></div>
</div>
</div>
</body>
</html>