<?php 
$title = "While Do While";
include 'includes/header.php' ?>
     <h1>While Loop</h1>
     <?php 
     /* Infinite Loop 
        while($grade < 10){
          echo '<p>I AM LESS THAN 10!</p>';
        }*/
      // Pre-Condition Loop 
      $grade = 0;
      while($grade < 10){
        echo '<p>I AM LESS THAN 10!</p>';
        $grade++;
      }

      echo 'EXIST LOOP!';
     ?>

     <h1>DO-While Loop</h1>
     <?php 
         //Post-Condition Loop
         $grade = 0;
         do{
          echo '<p>I AM A DO WHILE LOOP</p>';
          $grade++;
         }while($grade < 10);
         echo 'EXIT LOOP!';
     ?>
  
  <?php require 'includes/footer.php' ?>