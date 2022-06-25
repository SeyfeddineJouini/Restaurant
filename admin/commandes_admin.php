<?php
require_once 'secu_admin.php';
require_once '../connbd.php';
$sql="select cli.nom,cli.prenom,cli.adresse,c.id_cli,c.id_commande,a.designation,a.prix_unit,c.quantity 
from client cli,commande c,article a where (c.id_cli=cli.id_client)and(c.id_art=a.id_article) order by c.id_cli";  
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin/article.css">
    
    <link rel="stylesheet" href="../css/navbar.css">
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
    <div> <h1> La liste des commandes </h1></div>
</div>
<div class="contant"> 
    <table>
        <tr>
            <th>Nom client</th>
            <th>Adresse du client</th>
            <th>L'article</th>
            <th>quantité</th>
            <th>Livaison</th>
        </tr>
        <?php
        $somme=0;
         while($row=$result->fetch_assoc()) {
             $somme=$somme+($row['prix_unit']*$row['quantity']);?>
        <tr>
        <td><?php echo $row['nom'].' '.$row['prenom']; ?></td>
        <td><?php echo $row['adresse']; ?></td>
        <td><?php echo $row['designation']; ?></td>
        <td><?php echo $row['quantity']; ?></td>
        <td>
        
        <a href="livraison_admin.php?livraison=<?php echo $row['id_commande'];?>" >
        <input type="submit" value="LIVRAISON"> </a>
        </td>
        </tr>
        <?php } ?>
    </table>
    <div id="totale">
    <?php 
        echo 'la somme totale: '. $somme .'DT';
        ?>
        </div>
    </div>
</body>
</html>