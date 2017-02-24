<?php
  $connect= new mysqli('localhost','root','login');
  
  $username= $_POST['username'];
  $password=$_POST['password'];
  $sql="SELECT name FROM login WHERE username='$username' AND password='$password'";
  
  echo "<br>"."$username";

 ?>