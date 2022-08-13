<?php 
$title = "Array";
include 'includes/header.php' ?>
<!-- Note you can echo php tags with your variable inside HTML tags-->
  <h1><?php echo $title ?></h1> 
  <?php 
  $num = 3;

  // this is an array Note in PHP you can store any combination you want
  $numbers = array(1,2,3,4,5,6,7,8,9,101,2,65,78,4,65,65,68,65,65,657);
  // you can still access a subscript of the array using the index
  echo $numbers[5];

  echo "<p>$numbers[9]</p>";

  $size = count($numbers);
  echo "<p>Array Numbers is size: $size</p>";
  
  for($count = 0; $count < $size; $count++) {
    echo "<p>$numbers[$count]</p>";
  }
  ?>
  <!-- Note you can make pages be included in other pages by using 'require' -->
<?php require 'includes/footer.php' ?>