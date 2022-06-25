<?php
require_once 'secu_admin.php';
require_once '../connbd.php';
if (isset($_SESSION['aj']))
$msg1=$_SESSION['aj'];
else 
$msg1="";
unset($_SESSION['aj']);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/admin/form.css">
    <link rel="stylesheet" href="../css/admin/article.css">
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
<?php echo $msg1; ?>
<div class="container" style="border-radius: 1rem;"> 
<div class="bienvenu">
    <div> <h1>Ajout table</h1></div>
</div>
<center>
<div class="cont">
<form method="post" action="ajoute_table.php" >

            <label>numéro table a ajouter</label>
            <input type="number" name="nouveau_id"/>

            <label>nb du place de table </label>
            <input type="number" name="nouveau_nbrp" step="2" max="12"/>

            <input type="submit"  value="ajouter" />

</form>
</div></center>
       </div>
</body>
</html>