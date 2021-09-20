<?php 
     session_start();
	 //Get values pass from form in login php file
	 $email = $_POST['email'];
	 $pass = $_POST['pass'];

	 //to prevent mysql injection
	 $email = stripcslashes($email);
	 $pass = stripcslashes($pass);
     $email = mysql_real_escape_string($email);
	 $pass = mysql_real_escape_string($pass);
		 //connect to the server and select database
	 mysql_connect("127.0.0.1", "root", "");
	 mysql_select_db("tenga");
	 
     
	//Query the database for user
	 $result = mysql_query("select * from users1 where email = '$email' and pass = '$pass' ")
	               or die("Failed to query database");
//if user exists
		$row = mysql_fetch_array($result);
    if ($row['email'] == $email && $row['pass'] == $pass)
	  {      
       // Set session variables to be used on profile.php page
     $_SESSION['email'] = $row['email'];
	 header ("location:index.php");
	 }else 	include ('login.php');
			($message = "Username and/or Password incorrect.\\nTry again.");
			echo "<script type='text/javascript'>alert('$message');</script>";

 