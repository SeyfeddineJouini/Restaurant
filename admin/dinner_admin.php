<?php
require_once 'secu_admin.php';
require_once '../connbd.php';
$sql="select * from article where type='plat principal'";  
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
    <div> <h1> les plats principaux </h1></div>
</div>
<a href="ajout_article_admin.php" ><img src="../img/ajout.jpg" style="width:8rem;height:3rem;"></a>

    <table>
        <tr>
            <th>Plat</th>
            <th>Prix</th>
            <th>action</th>
        </tr>
        <?php while($row=$result->fetch_assoc()) {?>
        <tr>
        <td><?php echo $row['designation']; ?></td>
        <td><?php echo $row['prix_unit']; ?>DT</td>
        <td><a href="articleDelete.php?delete=<?php echo $row['id_article'];?>" >
        <img src="../img/Capture d’écran 2021-05-18 191215.jpg" style="width: 3rem;rem;border-radius:1rem;"></a>  <a href="article_modif.php?update=<?php echo $row['id_article'];?>" >
        <img src="../img/Capture d’écran 2021-05-18 193818.jpg" style="width:3.5rem;border-radius:1rem;"></a></td>
        </tr>
        <?php } ?>
    </table>
  </div>
</body>
</html>