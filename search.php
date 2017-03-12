<?php
include 'dbh.php';
$GENRE=$_GET['genre'];
$BOOKNAME=$_GET['bookname'];
$OFFER=$_GET['offertype'];
$PUB=$_GET['publisher'];

$sql="SELECT * FROM book WHERE  
BOOKNAME LIKE '$BOOKNAME%' AND GENRE LIKE '$GENRE' AND PUBLISHER LIKE '$PUB%'  ";

$result=$conn->query($sql);
//header("Location:searchpage.php");
while($row=mysqli_fetch_array($result))
{
	
	echo "   "."<br>";
	echo $row['BOOKNAME'] ."<br>";
	echo $row['GENRE'] ."<br>";
	echo $row['AUTHOR'] ."<br>";
	echo $row['PUBLISHER'] ."<br>";	
}
?>