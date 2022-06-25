<?php
require_once '../connbd.php';
require_once 'secu_admin.php';
$sql="select * from admin where id<>1"; 
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
    <div> <h1> La liste des administrateurs </h1></div>
</div>
<div class="contant">    
<a href="ajout_admin.php" ><img src="../img/ajout.jpg" style="width:8rem;height:3rem;"></a>
<table>
        <tr>
            <th>Email</th>
            <th>mot de passe</th>
            <th>Action</th>
        </tr>
        <?php while($row=$result->fetch_assoc()) {?>
        <tr>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><a href="adminDelete.php?delete=<?php echo $row['id'];?>" >
        <img src="../img/Capture d’écran 2021-05-18 191215.jpg" style="width: 3rem;rem;border-radius:1rem;"></a> </td>
        </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>