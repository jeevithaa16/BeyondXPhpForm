<?php
if($_POST){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "intern";
	$name = $_POST['name'];
	$phn = $_POST['phn'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "INSERT INTO register (name, phn, email, pass) VALUES ('$name', '$phn', '$email', '$pass')";

		  $conn->exec($sql);
		  echo "New record created successfully";
		  header("location: 4.html");

$conn = null;
}
?>