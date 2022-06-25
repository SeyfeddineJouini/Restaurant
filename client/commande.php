<?php
require_once '../connbd.php';
require_once 'secu.php';
$id=$_GET['commande'];
$_SESSION['id_art']=$id;
$sql="select * from article where id_article='$id'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
    <style>
    @media screen and (max-width: 1000px) {
    .container div{
        width: 100%;
    }
    .imger{
        height: 20%;
        width: 80%;
    }
  }</style>
</head>
<body style="background-image:url('../img/14097007_web1_restaurant.png'); background-size: cover;">
<script>
function myFunction() {
  confirm("Etes vous sur de vouloir commander cet article?!");
}
</script>
<div class="container" style="width:50%;overflow:auto;">
    <div>
        <div>
        <?php echo "<img src='../img/".$row['photo']."' height='100rem' class='imger'>";?></div><br><br><br><br><br>
        <div><?php echo 'article: '.$row['designation']; ?></div><br>
        
        <div><?php echo 'prix unitaire: '.$row['prix_unit'] .'DT'; ?></div>
    </div>
    <div>
    <form action="inser_commande.php" method='get'>
  
  <input type="number" name="quantity"  value="1" min="1">
      
  <input type="submit"  id="submit" value="valider" onclick="myFunction()">
</form>
    </div>
</div>
</body>
</html>
