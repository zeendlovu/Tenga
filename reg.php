<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("127.0.0.1", "root", "", "tenga");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$fname = $mysqli->real_escape_string($_REQUEST['fname']);
$lname = $mysqli->real_escape_string($_REQUEST['lname']);
$Uname = $mysqli->real_escape_string($_REQUEST['Uname']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$pass = $mysqli->real_escape_string($_REQUEST['pass']);
 
 
// Attempt insert query execution
$sql = "INSERT INTO users1 (fname, lname, Uname, email, pass) VALUES ('$fname', '$lname', '$Uname', '$email', '$pass')";
if($mysqli->query($sql) === true){
    header ('location:login.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>