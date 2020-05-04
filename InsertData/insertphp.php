<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db('$con',test);

extract($_POST);

if(isset($_POST['submit'])){

  $q = "INSERT INTO user_details (name,passswd) VALUES ('$username','$password')";
  $query = mysqli_query($con,$q);
  header('location:insert.php');

}


 ?>
