<?php
session_start();
require_once 'connbd.php';
if(!isset($_SESSION['user']))
header('location:login.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reservation </title>
    <link rel="stylesheet" href="reserve.css">
</head>
<body class="banner" style="background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url('fin1.jpg') ;">

    <div class="navbar"> 
        <ul id="nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Reservation</a></li>
            <li><a href="#">Contact-us</a></li>
        </ul>
    </div>
    
<h1 style="color:white;"><?php echo 'welcome, '.$_SESSION['user']['id_client']; ?></h1>
    <a href="logout.php">logout</a>
    <div class="container" >
        
        <table  id="content" align="center" >
            <tr><td><h1>Resérvation de table</h1></td></tr>
      
        <form>
            
            <tr><td><label for="mail">Adresse mail</label></td></tr>
            <tr><td><input type="email" id="mail" required placeholder="Entrer votre adresse mail"></td></tr>
            <tr><td><label for="tel">Numéro de téléphone</label></td></tr>
            <tr><td><input type="tel" placeholder="Entrer votre numéro de téléphone" required></td></tr>
            <tr><td><label for="date">Date</label></td></tr>
            <tr><td><input type="date" required></td></tr>
            <tr><td><label for="time">Heure</label></td></tr>
            <tr><td><input type="time"required></td></tr>
            <tr><td> <label for="time">Nombre de place</label></td></tr>
            <tr><td><select name="place" id="nb-place" required>
                   <option value="défaut" selected disabled>choisir le nombre de places</option>
                   <option value="2-4">2-4</option>
                   <option value="5-6">5-6</option>
                    <option value="6+">6+</option>
                 </select></td></tr>
                 <tr><td style="text-align: right;"> <input type="submit" id="submit" value="Reserver" style="text-align: center;"></td></tr>
        
        </form>
    </table>  
</div>
</body>
</html>