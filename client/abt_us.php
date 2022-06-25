<?php
require_once '../connbd.php';
//require_once 'secu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/menus.css">
    <title>Document</title>
    <style>
  
.container .coord{
    width: 50%;
    height:100%;
    float: left;
    padding:7rem;
    padding-top:3rem;
}
.container .map {
    width: 50%;
    height:100%;    
    float: left;
}
h2{
    margin-bottom:2rem;
    font-size:3rem;
    text-decoration:underline;
}
.box{
    padding:2rem;
    font-size:1.5rem;
    text-align:center;
}
.box a{
    text-decoration:none;
    color:black;
}
.box a:hover{
    color:#b9a702;
}

    </style>
</head>
<body style="background-image:url('../img/images4.png'); background-size:cover;">
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
    <div class="container">

    <div class="coord">
        <h2>Coordonnées:</h2>
    <div class="box"> <h4>Email:  <a href="mailto:jazzy@gmail.com">jazzy@gmail.com</a></h4></div>
    <div class="box"><h4>Numéro: +216 123654789</h4></div>
    <div class="box">

<h4>JAZZy HORAIRES:</h4>

<p>TOUT LES JOURS : 10h - 23h </p>  
</div>
    </div>
    <div class="map"><div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=institut%20sup%C3%A9rieur%20d'informatique&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://soap2day-to.com"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google maps embed responsive</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div></div>
</div>
</body>
</html>