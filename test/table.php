<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        /* CSS styles for centering the table and setting its width */
        table {
            margin: 0 auto; /* Center-align the table horizontally */
            width: 40%; /* Set the desired width of the table */
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1{
          text-align: center;
        }
    </style>
</head>
<body>
<!-- dashboard.php -->
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "client";
$conn = new mysqli($servername, $username, $password, $dbname);

// Retrieve user records
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Display user records in a table
if ($result->num_rows > 0) {
  echo "<table>";
  echo "<h1>Admin Dashboard</h1>";
  echo "<tr><th>Name</th><th>Email</th><th>Mobile Number</th><th>Address</th><th>City</th><th>Pincode</th><th>Message</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['mobile'] . "</td><td>" . $row['address'] . "</td><td>" . $row['city'] . "</td><td>" . $row['pincode'] . "</td><td>" . $row['comment'] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "No users found.";
}

$conn->close();
?>
</body>
</html>