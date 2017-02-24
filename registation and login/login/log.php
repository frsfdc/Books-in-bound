<?php
   session_start();
   
   if (isset($_POST['login'])){
	   include_once("db.php");
	   $username=strip_tags($_POST['username']);
	   $password=strip_tags($_POST['password']);
	   $password=md5($password);
	   
	   $sql="SELECT * FROM users WHERE username='$username' LIMIT 1";
	   $query= mysqli_query($db,$sql);
	   $row=mysqli_fetch_array( $query);
	   $id=$row['id'];
	   $db_password=$row["password"];
	   
	   if($password==$db_password){
		   $_SESSION['username']=$username;
		   $_SESSION['id']=$id;
		   header("location: index.php");
		   
	   }else{
		   echo "you didn't enter the correct details";
	   }
	   
   }
 
  
  
  
 ?>
 
 <html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/logstyle.css">
</head>
<body>
  <div class="container">
  <img src="images/user.png">
	<form action="log.php" method="POST" >
		
			<input type="text" name="username" placeholder="Enter username">
		
		
			<input type="password" name="password" placeholder="Enter password">
		
	  <input type="submit" name="submit" value="login" class="btn-login"><br>	
     	  
	</form>
  </div>
</body>

</html>  
