<?php
include 'dbh.php';
$USERNAME=$_POST['username'];
$PASSWORD=$_POST['password'];

$sql="SELECT * FROM users WHERE  
username='$USERNAME' AND password='$PASSWORD'";

$result=$conn->query($sql);

if(!$row=$result->fetch_assoc())
{
	echo "your username or password is incorrect";
}else
{
	echo "you are logged in";
}





?>