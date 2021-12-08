<?php 
$title ='Index';
include 'Includes/header.php'?>
    <h1> <?php echo $title ?> </h1>
    <?php
    echo " Hello PHP";
    echo"<br/>";
    echo"Second Line";
    echo"<br/>";
    ?>

    <?php 
    $name = 'Chevaun Mcintosh';
    $age =27;
    echo $name;
    echo '<h1> My Name is : '.$name.'</h1>';
    echo '<h1> My Age is : '.$age.'</h1>';
  
    ?>
    <button type="button" class="btn btn-dark">Click Me</button>
   <?php require 'includes/footer.php'?>