
<?php   
require_once 'secu_admin.php';
require_once '../connbd.php';
if (isset($_SESSION['info']))
$msg='table supprimer avec succes';
else 
$msg="";
unset($_SESSION['info']);
$sql="select * from tables";
$requette=mysqli_query($conn,$sql);
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin/article.css">
    <link rel="stylesheet" href="../css/navbar.css">
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
<div > <h1>La liste des tables </h1></div></div>

<a href="ajoute_table_admin.php" ><img src="../img/ajout.jpg" style="width:8rem;height:3rem;"></a>
<div class="contant"> 

<table>
<tr>
<th>numéro de table </th>
<th> nombre de place </th>
<th>Action</th>
</tr>
<?php while ($row=mysqli_fetch_assoc($requette)) { ?>
<tr>
<td> <?php echo $row['num']; ?> </td>
<td><?php echo $row['capacity'];?> </td>
<td><a href="supprime_table.php?delete=<?php echo $row['num']; ?>"  >
        <img src="../img/Capture d’écran 2021-05-18 191215.jpg" style="width: 3rem;rem;border-radius:1rem;"></a> </td>
</tr>
<?php } ?>
</table>

</div>
</div>
    </body>

</html>




