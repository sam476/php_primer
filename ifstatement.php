<?php 
$title = "IfStatement";
include 'includes/header.php' ?>
  <?php 
     
     echo '<h2>If Statement</h2>';

     $grade = 50;
     // ===, ==, >, <, <=, >=
     if($grade >= 50){
        echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
     }
     else { //notice we place other code like css in double quotes to integrate them in
      echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
     }
     $grade = 'B';
     // If-Else IF-Else note also takes comparison operators || && !
     if($grade == 'A') {
      echo '<h2 style="color: green">YOU ARE A SUPERSTAR!</h2>';
     }
     elseif ($grade == 'B'){
      echo '<h2 style="color: blue">YOU DID WELL!</h2>';
     }
     else{
      echo '<h2 style="color: red">YOU HAVE FAILED....</h2>';
     }
  ?>
<?php require 'includes/footer.php' ?>