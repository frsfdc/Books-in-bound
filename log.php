
 
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/style.css"></link>
</head>
<body>

<div id="container">
<form action="register.php" method="POST">
    <label for="a"><b>Username:</b></label>
    <input id="a" type="text" placeholder="Enter Username" name="username" required><br />
 
	 
    <label><b>Email:</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br />
    
	<label><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br />

    <label><b>Repeat Password:</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br />
    <input type="checkbox" checked="checked"> Remember me<br />
	
	<label><b>Gender:</b></label><br>
	<input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female<br />
    
	<label><b>City:</b></label>
    <input type="text" placeholder="City" name="city" required><br />

	<label><b>University:</b></label>
    <input type="text" placeholder="Enter University" name="university" required><br />
 
	<p>By creating an account you agree to our <a href="#">Terms & Privacy.</a></p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
</form>
</div>

</body>
</html>  
