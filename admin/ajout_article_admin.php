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
    
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/admin/form.css">
    <link rel="stylesheet" href="../css/admin/article.css">
    <title>Document</title>
</head>
<body>
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
    <div> <h1>Ajout article</h1></div>
</div>
<center>
<div class="cont">
    <form method="post" action="article_ajout.php" enctype="application/x-www-form-urlencoded">
    <p>nom</p> <input type="text" name="nom"><br>
    <p>type</p><select name="type">
    <option value="entre">Entré</option>
    <option value="plat principal">Plat Principal</option>
    <option value="dessert">Dessert</option>
    <option value="boissons">Boissons</option>
    </select><br>
    
    <p>prix</p> <input name="prix" type="number" min=0 step="0.01"><br>
    <p>Photo:</p> <input type="file" name="photo">
    <input type="submit" value="ajouter">
    </form>
    </div></center>
       </div>
</body>
</html>
