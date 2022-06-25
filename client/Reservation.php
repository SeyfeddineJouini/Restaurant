<?php
require_once '../connbd.php';
require_once 'secu.php';

if (isset($_SESSION['confirmer'])){ 
  $msg=$_SESSION['confirmer'];
}
else 
$msg=" ";

unset($_SESSION['confirmer']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reservation </title>
    <link rel="stylesheet" href="../css/reserve.css">    
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body> 
    <div class="navbar"> <ul id="nav">
            <li><a href="acceuil.php">Home</a></li>
            <li><a href="Menu_principal.php">Menu</a></li>
            <!--<li style="background-color: rgb(46, 45, 45);  "><a href="Reservation.php" style="background-color: rgb(46, 45, 45);  ">Reservation</a></li>-->
            <li><a href="facture_client.php" >Panier</a></li>
            <li><a href="abt_us.php" >Coordonnées</a></li>
            <li><a href="../logout.php" style="color:red;">logout</a></li>
        </ul>
       
    </div>
<div class="container">
    
<h1>Reservation table</h1>
    <?php echo $msg ;?>

        <form method="post" action="verif_table_2.php" >
            <label for="date">Date</label><br>
            <input type="date" name="dates" required/><br>

            <label for="time">Heure arriver</label><br>
            <input type="time" name="heure_arrive" value="10:00" min="10:00" max="23:00" required/><br>

            <label for="time">Heure depart</label><br>
            <input type="time" name="heure_depart" value="23:00" min="10:00" max="23:00" required /><br>
            
            <select name="nb_personne"><br>
                <option value="2">2</option>
                 <option value="4">4</option>
                <option value="6">6</option>
                <option value="12">12</option>
                </select>
              
            <!--<input type="number" name="nb_personne"/>-->

                 <input type="submit"  value="Reserver" class="submit" style="width:40%;">
        
        </form>
</div>
</body>
</html>