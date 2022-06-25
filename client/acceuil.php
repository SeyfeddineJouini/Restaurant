<?php
require_once '../connbd.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">   
    <link rel="stylesheet" href="../css/acceuil.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <title>Document</title>
</head>
<body>
    
    <div class="navbar" style="background-color: rgb(46, 45, 45);margin-top:0;width:100%;overflow:auto; ">
     <img src="../img/logo.jpg" alt="" style="width:100px;;margin-left:50px;"> 
        <ul id="nav" style="background-color: rgb(46, 45, 45);margin-top:0;  ">
            <li style="background-color: rgb(46, 45, 45);  "><a href="acceuil.php" style="background-color: rgb(46, 45, 45);  ">Home</a></li>
            <li style="background-color: rgb(46, 45, 45);  "><a href="Menu_principal.php" style="background-color: rgb(46, 45, 45);  ">Menu</a></li>
            <!--<li style="background-color: rgb(46, 45, 45);  "><a href="Reservation.php" style="background-color: rgb(46, 45, 45);  ">Reservation</a></li>-->
            <li style="background-color: rgb(46, 45, 45);  "><a href="facture_client.php" style="background-color: rgb(46, 45, 45);  ">Panier</a></li>
            <li style="background-color: rgb(46, 45, 45);  "><a href="abt_us.php"  style="background-color: rgb(46, 45, 45);  ">Coordonnées</a></li>
            <li style="background-color: rgb(46, 45, 45);  "><a href="#id1" style="background-color: rgb(46, 45, 45);  ">A propos de nous</a> </li>
          <?php 
           if(!isset($_SESSION['user'])){?>
           <li style="background-color: rgb(46, 45, 45);  "><a href="../login.php" style="color:red;background-color: rgb(46, 45, 45); ">login</a></li>
           <li style="background-color: rgb(46, 45, 45);  "><a href="inscription.php" style="color:red;background-color: rgb(46, 45, 45); ">s'inscrire</a></li>
          <?php
           }
            else{
                ?>
            
            <li style="background-color: rgb(46, 45, 45);  "><a href="../logout.php" style="color:red;background-color: rgb(46, 45, 45); ">logout</a></li>
               <li style="background-color: rgb(46, 45, 45); color:#fbc80a;"><?php echo 'Bienvenu: '.$_SESSION['user']['prenom'].'  '.$_SESSION['user']['nom']; ?> </li>
            <?php
            }
            ?>
        </ul>
    </div>
   <div class="vidContain"> 
       
<video class="vid"  width="320" height="240" autoplay muted >  
 <source  src="../video/acceuil_Trim.mp4" type="video/mp4"> Your browser does not support the video tag. 
 </video>
 </div >
            
 <h1 id="id1" style="margin-top:4rem;text-align:center;">A propos de nous:</h1>
 <div  class="hist-cont" >
     <div class="history"><img src="../img/plat_principal_flickr_2304576748_f79c906b85_b.jpg" alt=""></div>
     <div class="history" id="ecrire">
         <h2 >History</h2>
         <p>Créé en 1970</p>
         <p>Il est classé en tant que<br> meilleur restaurant touristique du pays selon l'Office national du tourisme tunisien</p>
     </div>
     <div class="history"><img src="../img/tarte-choco.jpg" alt=""></div>
     <div class="history" id="ecrire"> <h2 >Philosophie</h2>
     <p>accueil personnalisé</p>
         <p>restauration d’inspiration convivialité</p>
         <p>invitation à la découverte</p>
        </div>
     <div class="history"><img src="../img/Topaz-Food.jpg" alt=""></div>
     <div class="history" id="ecrire">
     <h2 >Cuisine</h2>
     <p>cuisine Tunisienne</p>
         <p>Gastronomie française</p>
         <p>cuisine italienne</p>
     </div>
 </div>
            <div class="icon-art">
                <div class="cont"  >
                    <img src="../img/Capture d’écran 2021-05-06 185703.jpg" width="220rem" height="200rem">
                    <img src="../img/Capture d’écran 2021-05-06 185802.jpg" width="220rem" height="200rem" style="margin-left:0;">
                    <img src="../img/Capture d’écran 2021-05-06 185633.jpg" width="220rem" height="200rem">
                    <img src="../img/Capture d’écran 2021-05-06 185734.jpg" width="220rem" height="200rem" style="margin-left:0;">
                    </div>
            </div>




            
</body>
</html>