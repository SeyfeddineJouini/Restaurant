<?php

    require '../connbd.php' ; 
    require 'secu.php' ; 
    $id_cli=$_SESSION['user']['id_client'];
    if(isset($_POST['dates'])){
        $date=$_POST['dates'];
    }
    if(isset($_POST['heure_arrive'])){
        $hr_arr=$_POST['heure_arrive'];
    }
    if(isset($_POST['heure_depart'])){
        $hr_sor=$_POST['heure_depart'];
    }
    if(isset($_POST['nb_personne'])){
        $people=$_POST['nb_personne'];
    }

    $sql = "SELECT * FROM tables where capacity>='$people' ";
    $result = $conn->query( $sql);
    
        
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
    
            $req1="SELECT * 
            FROM reservation_table 
            WHERE id_tab=".$row['num']." AND dates='$date'and
            ((heure_arrive>= '$hr_arr'and heure_depart <='$hr_sor') or 
            (heure_arrive<= '$hr_arr' and heure_depart >'$hr_arr') or
            (heure_arrive < '$hr_sor' and heure_depart>='$hr_sor')) "; 
           $res1 =$conn->query($req1);
           if ($res1->num_rows==0 ){
    
               $req1="INSERT INTO `reservation_table`(`id_reservation`, `id_cli`, `id_tab`, `heure_arrive`, `heure_depart`, `dates`, `nb_personne`) VALUES 
               ('',$id_cli,".$row['num'].",'$hr_arr','$hr_sor','$date',$people)" ;
               $conn->query($req1) ; 
               header("location:Reservation.php");
               break;
           }
        }

   
    }




?>