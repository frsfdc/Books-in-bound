<?php 
session_start();
if(isset($_SESSION['logged in']) || $_SESSION['logged in']==false){
	header("location:log.php");
	
}
?>
<h2>you have logged in<h2>