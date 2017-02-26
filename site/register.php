<?php
include 'dbh.php';
$USERNAME=$_POST['username'];
$PASSWORD=$_POST['psw'];
$EMAIL=$_POST['email'];
$GENDER=$_POST['gender'];
$TOWN=$_POST['city'];
$UNI=$_POST['university'];

$sql="INSERT INTO users (USERNAME,PASSWORD,TOWN,GENDER,EMAIL,UNI)
VALUES('$USERNAME','$PASSWORD','$EMAIL','$GENDER','$TOWN','$UNI')";
$result=$conn->query($sql);



echo $USERNAME ."<br>";
echo $PASSWORD."<br>";
echo $EMAIL."<br>";
echo $GENDER."<br>";
echo $TOWN."<br>";


?>