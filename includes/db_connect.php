<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ebs";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);
	// Check connection
	// if ($conn->connect_error) {
	// 	die("Connection failed: " . $conn->connect_error);
	// }

