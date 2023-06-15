<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<!-- register.php -->
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "client";
$conn = new mysqli($servername, $username, $password, $dbname);

// Retrieve form field values
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$comment = $_POST['comment'];

// Insert user information into the database
$sql = "INSERT INTO users (name, email, password, mobile, address, city, pincode, comment) VALUES ('$name', '$email', '$password', '$mobile', '$address', '$city', '$pincode', '$comment')";
$conn->query($sql);
$conn->close();

// Redirect to the dashboard page
header("Location: developers.php");
?>


	</center>
</body>

</html>