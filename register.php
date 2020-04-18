<?php 
//session_star();
//connect to database
$db = mysqli_connect("localhost", "root", "" ,"authentication");
if (isset($_POST['register_btn']))
{
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$password2 = mysql_real_escape_string($_POST['password2']);

	if($password == $password2) {
	//create user
	$password =md5 ($password); // hash password before storing for security purposes
	$sql = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";
	mysqli_query($db, $sql);
	$_SESSION ['message'] = "You are now logged in";
	$_SESSION ['username'] = $username;
	header ("location: home.php");//redirect to home page
}else{
$_SESSION['message'] = "the two passwords do not match";

}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Register, login and logout user php mysql</title>
</head>
<body>
	<div class="header">
		<h1>register, login and logout user php mysql</h1>
	</div>
	<form method="post" action="register.php">
		<table>
			<tr>
				<td>
					Username:
				</td>
				<td><input type="text" name="username" class="textInput"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" class="textInput"></td></tr>
				<tr><td>Password:</td>
					<td><input type="text" name="password" class="textInput"></td></tr>
					<tr><td>Password again:</td>
						<td><input type="text" name="password2" class="textInput"></td></tr>
						<tr><td></td>
						<td><input type="submit" name="register_btn" value="Register"></td></tr>
		</table>
	</form>
</body>
</html>
