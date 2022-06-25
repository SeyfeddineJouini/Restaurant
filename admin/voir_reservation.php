<?php
require_once 'secu_admin.php';
require_once '../connbd.php';
if (isset($_SESSION['reservation']))
$msg2=$_SESSION['reservation'];
else 
$msg2="";
unset($_SESSION['reservation']);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin/article.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <style>
td,tr,th{
    padding:1rem 2rem ;
    text-align: center;
    border: 1px solid grey;
   }
    </style>
</head>
<body>
<?php $r=mysqli_query($conn,"select * from reservation_table order by dates") ?>

<?php echo $msg2; ?>
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
<div class="container" style="border-radius: 1rem;width:100%;margin-left:0;">
    <div class="bienvenu">
    <div> <h1>Gérer les réservations    </h1></div>
</div>
<table>
<tr>
    <th>nom et prénom</th>
<th>numéro de table reservee</th>
<th>nombre personne </th>
<th>date de reservation</th>
<th>heure darriver </th>
<th>heure de depart </th>
<th>action</th>
</tr>
<?php while ($row=mysqli_fetch_assoc($r)) { ?>
    <?php $id=$row["id_cli"];
    $s=mysqli_query($conn,"select nom,prenom from client where id_client=$id") ;
    $a=$s->fetch_assoc();?>
 <tr>
 <td><?php echo $a["nom"].' '.$a["prenom"]; ?></td>
 <td> <?php echo $row["id_tab"] ?> </td>
 <td> <?php echo $row["nb_personne"] ?> </td>
 <td> <?php echo $row["dates"] ?> </td>
 <td> <?php echo $row["heure_arrive"] ?> </td>
 <td> <?php echo $row["heure_depart"] ?> </td>
 <td style="width:5rem;"><a href="supprime_reservation.php ?id=<?php echo $row['id_reservation']; ?>">
        <img src="../img/Capture d’écran 2021-05-18 191215.jpg" style="width: 3rem;rem;border-radius:1rem;"></a></td>
 </tr>
<?php } ?>
</table>
</div>
</body>
</html>