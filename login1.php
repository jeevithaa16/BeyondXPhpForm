<?php
if($_POST){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "intern";
	$email = $_POST['email'];
	$pass = $_POST['pass'];

		  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * from register where email= '$email' && pass= '$pass'";
		  $result = mysql_query($dbname, $sql);
		  if($result == 1){
		  	echo "logged successfully";
		  	
		  }
		  header("location:index.html");  
		  $conn = null;
}
?> 
