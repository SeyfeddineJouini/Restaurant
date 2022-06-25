<?php
require_once '../connbd.php';
require_once 'secu_admin.php';
$sql="select * from client"; 
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    
    <link rel="stylesheet" href="../css/admin/article.css">
    <title>Document</title>
    <style>
td,tr,th{
    padding:1rem 2rem ;
    text-align: center;
    border: 1px solid grey;
   
    

}
    </style>
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
    <div> <h1> La liste des clients  </h1></div>
</div>
<table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>numéro de téléphone</th>
            <th>adresse</th>
            <th>Action</th>
        </tr>
        <?php while($row=$result->fetch_assoc()) {?>
        <tr>
        <td><?php echo $row['nom']; ?></td>
        <td><?php echo $row['prenom']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['num_tel']; ?></td>
        <td><?php echo $row['adresse']; ?></td>
        <td><a href="clientDelete.php?delete=<?php echo $row['id_client'];?>" >
        
        <img src="../img/Capture d’écran 2021-05-18 191215.jpg" style="width: 3rem;rem;border-radius:1rem;"></a> </td>
        </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>