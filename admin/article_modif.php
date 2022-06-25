<?php
require_once 'secu_admin.php';
require_once '../connbd.php';
$modif=$_GET['update'];
$sql="select * from article where id_article='$modif'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div> <h1> Modificarion <br> <?php echo $row['designation'];?>  </h1></div>
</div>
<center>
<div class="cont">
<form method="post" >
    <p>nom</p> <input type="text" name="nom" value="<?php echo $row['designation']; ?>"><br>
    <p>prix</p> <input name="prix" type="number" min=0 step="0.01" value="<?php echo $row['prix_unit']; ?>">
    <input type="submit" id="submit" value="sauvegarder">
</form>
</div></center>
       </div>
<?php
if($_POST){
    extract($_POST);
    $query="UPDATE article
    SET designation = '$nom', prix_unit = '$prix'
    WHERE id_article='$modif'";
    mysqli_query($conn,$query);
    if(strcmp($row['type'],'plat principal')==0){
    header("location:dinner_admin.php");}
    elseif(strcmp($row['type'],'dessert')==0){
        header("location:dessert_admin.php");
    }
    elseif(strcmp($row['type'],'boissons')==0){
        
        header("location:drinks_admin.php");
    }
    else{        
        header("location:entre_admin.php");
    }
       } 
       ?>
       
</body>
</html>