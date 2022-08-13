<?php 
$title = "Forloop";
include 'includes/header.php' ?>
    <h1>For Loops</h1>

    <?php 
      for($count = 0; $count < 10; $count++){
        echo '<p>HELLO WORLD</p>';
      }
      //using variables 
      for($count = 0; $count < 10; $count++){
        echo "<p>The Count is: $count</p>";
      }
    ?>
<?php require 'includes/footer.php' ?>