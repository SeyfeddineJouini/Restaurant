<?php
require_once '../connbd.php';
require_once 'secu.php';

$id_c=$_SESSION['user']['id_client'];
$sql="select c.id_commande,a.designation,a.prix_unit,c.quantity from commande c,article a where (c.id_art=a.id_article)and(c.id_cli='$id_c')";  
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/facture.css">
    <title>Document</title>
</head>
<script>
function myFunction() {
  confirm("Etes vous sur de vouloir annuler?");
}
</script>
<body   style="background-image:url('../img/dining-out-001.png'); background-size: cover;">
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
    <h1>Articles en cours de livraison</h1>
    <table >
        <tr>
            <th>nom du plat</th>
            <th>Prix</th>
            <th>quantité</th>
            <th>Annulation</th>
        </tr>
        <?php
        $somme=0;
         while($row=$result->fetch_assoc()) {
             $somme=$somme+($row['prix_unit']*$row['quantity']);?>
        <tr>
        <td><?php echo $row['designation']; ?></td>
        <td><?php echo $row['prix_unit']; ?>DT</td>
        <td><?php echo $row['quantity']; ?></td>
        <td><a href="commandeDelete.php?delete=<?php echo $row['id_commande'];?>" onClick="myFunction()">
        <img src="../img/Capture d’écran 2021-05-18 214345.jpg" style="width:5rem;"></a> </td>
        </tr>
        
        <?php } ?>
        <tr>
        <td><?php echo 'Frais de livraison'; ?></td>
        <td><?php echo '7 '; ?>DT</td>
        <td><?php echo '-'; ?></td>
        
        </tr>
    </table>
    <div id="totale"><?php 
        echo 'Somme totale à payer: '.$somme .'DT';
        ?></div>
</div>
</body>
</html>