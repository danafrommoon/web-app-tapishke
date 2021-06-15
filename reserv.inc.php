<?php

require('db.php');
include("auth_session.php");


if(isset($_POST['submit'])) {//elenxw an exei bei sti selida mesw tou submit

require 'db.php';

    $user= $_SESSION['username'];
    $name= $_POST['name'];
    $phonenumber= $_POST['phonenumber'];
    $datapicker= $_POST['datapicker'];
    $eattime= $_POST['eatingtime'];
    $numpeople= $_POST['numpeople'];
    $restaurant = $_POST['restaurant'];    
    
         $sql = mysqli_query($con,"INSERT INTO reservation(name, phonenumber, datapicker,eattime, numpeople,restaurant, userId) VALUES(?, ?, ?, ?, ?, ?, ?)");
         if($sql){
  echo "<script>alert('Reservation successfully submitted.  ');</script>";
        }
    }

        ?>
