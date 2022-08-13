<?php
  $title = "Index";
  include 'includes/header.php' 
?>
    <!-- Note that php has specialized keywords we use to make code -->
    <!-- Note echo is the print equivalent for PHP -->
    <?php 
    // comments in PHP 
    /* */
      echo 'Hello PHP!';
      // Note we can use echo to insert HTML code 
      echo '<br/>';
      echo 'Second Line';
      echo '<br/>';
    ?>

    <?php 
    // Note you can declare variables with $variableName and assign with = 
    // Note that PHP is 'not' strongly typed so you don't have to specify the type
        $name = 'Trevor Williams';
        $age = 21;
        echo $name;
    // Note to concatenate a variable we use two full stops (.) and add the variable inside followed by surrounding ''
        echo '<h1>My Name Is: '.$name.' </h1>';
        echo '<h1>My Age Is: '.$age.' </h1>';
    // Note if you use "" you do not have to use full stops for variables.
        echo "<h1>My Name is: $name </h1>";
    ?>

   <?php require 'includes/footer.php' ?>