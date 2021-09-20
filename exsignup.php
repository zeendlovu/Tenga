<DOCTYPE html>
<html>
<head>
<title>Tenga login</title>
<link rel="stylesheet" type="text/css" href="exsignup.css">
</head>
<body>
<form action="reg.php" method="post" autocomplete="off">
	<label>First Name</label>
	<input type="text" name="fname" required="true"><br>
	<label>Last Name</label>
	<input type="text" name="lname" required="true"><br>
	<label>Username</label>
	<input type="text" name="Uname" required="true"><br>
	<label>Email</label>
	<input type="email" name="email" required="true"><br>
	<label>Password</label>
	<input type="password" name="pass" required="true"><br><br>
	<input type="submit" value="Submit" id="button"><br>
	<p>Already a member?<a href="login.php"> Log in</a></p>
</form>

</body>
</html>