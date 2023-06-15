<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
</head>
<body>
	<center>
		<h1>Storing Form data in Database</h1>
		<!-- registration_form.html -->
<form action="insert.php" method="POST">
  <input type="text" name="name" placeholder="Name" required><br><br>
  <input type="email" name="email" placeholder="Email" required><br><br>
  <input type="password" name="password" placeholder="Password" required><br><br>
  <input type="tel" name="mobile" placeholder="Mobile Number"  maxlength="10"  required/><br><br>
  <input type="text" name="address" placeholder="Address" required><br><br>
  <input type="text" name="city" placeholder="City" required><br><br>
  <input type="password" name="pincode" placeholder="Pincode" maxlength="6"><br><br>
  <textarea rows="4" cols="40" name="comment">
Enter text here...</textarea><br><br>
  <button type="submit">Register</button>
</form>
<br><br>
<form action="table.php" method="POST">
        <input type="submit" value="Go to Dashboard">
    </form>
	</center>
	

</body>
</html>
