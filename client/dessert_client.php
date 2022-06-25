<?php

require_once '../connbd.php';
//require_once 'secu.php';

$sql="select * from article where type='dessert'";  
$result=$conn->query($sql);
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
</head>
<body>
<div class="navbar">  <ul id="nav">
            <li><a href="acceuil.php">Home</a></li>
            <li><a href="Menu_principal.php">Menu</a></li>
            <!--<li style="background-color: rgb(46, 45, 45);  "><a href="Reservation.php" style="background-color: rgb(46, 45, 45);  ">Reservation</a></li>-->
            <li><a href="facture_client.php" >Panier</a></li>
            <li><a href="abt_us.php" >Coordonnées</a></li>
            <li><a href="../logout.php" style="color:red;">logout</a></li>
        </ul>
       
    </div>
    <div class="container">
    <div class="bienvenu">
    <div> <h1>Bienvenu Chez JAZZy   </h1></div>
    <div><h3>Trouvez tout ce dont vous avez besoin, parmi nos côtes</h3></div>
    </div>
        <?php if(!$result->num_rows){
        echo '<center>Pas d\'articles disponibles</center>';}
         while($row=$result->fetch_assoc()) {?>
        
                        <div class="article">
                                    <div class="desc">
                                        
                                    <?php echo "<img src='../img/".$row['photo']."' width='100%' height='170rem'>";?>
                                    <?php echo 'nom du plat:<br>'.$row['designation'].'<br>'; ?>
                                            <?php echo 'Prix:<br>'.$row['prix_unit']; ?>DT
                                                </div>
                                            
                                    <div class="command">
                                        <a href="commande.php?commande=<?php echo $row['id_article'];?>" >
                                        <img src="../img/bouton_commande.jpg" alt=""></a>
                                    </div>
                        </div>
        <?php } ?>
   
</div>
</body>
</html>