<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
try{
	$conn = new PDO("mysql:host= $servername; dbname=$dbname",$username,$password);
	
$conn-> setAttribute(PDO::ATTR_ERRMODE. PDO:: ERRMODE_EXCEPTION);
//login
//define variable and assign 0
$name = $password =$nameErr =$passwordErr = $error ="";
//now validate the form inputes
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//check if username is empty
	if (empty(test_input($_POST["name"]))) {
		$nameErr = "Entrer Username"; 
		} else {
			$name = test_input($_POST["name"]);
	}
	if (empty(test_input($_POST["password"]))) {
		$passwordErr = "Entrer Password";
		
		 }else {
			$password = test_input($_POST["password"]);
	}
}
 //validate login coordinates
if (empty($nameErr)&&empty($password)) {
	$stmt = $conn->query("SELECT id FROM 'user'
		WHERE name = '$name' and password = '$password';");
	if ($stmt -> execute()) {
		if ($stmt ->rowcount()==1) {
			session_start();
			$_SESSION["name"] = $name;
			header("location: welcome.php");
			# code..."location:"
		} else {
		   $error =  "username or password didnt match";
		# code...
	}
	# code...
}

}

//catch(PDOException $e)
{
	echo "Error: ".$e->getMessage();
	}
	function test_input($data){
$data = trim($data);
$data = stripcslashes($data);
$data = htmlspecialchars($data);
return $data;
}
	 ?>

<!DOCTYPE html>
<html>
<head>
	<title>User login</title>
</head>
<body alink="centre">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"method="post"> 
		<h1>User login</h1>
		Username: <input type="text" name="name">
		<br><br>
		Password: <input type="password" name="password"><br><br>
		<input type="submit" name="submit" value="login">
	</form>
  <?php $conn=null; ?>
</body>
</html><?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
try{
	$conn = new PDO("mysql:host= $servername; dbname=$dbname",$username,$password);
	
$conn-> setAttribute(PDO::ATTR_ERRMODE. PDO:: ERRMODE_EXCEPTION);
//login
//define variable and assign 0
$name = $password =$nameErr =$passwordErr = $error ="";
//now validate the form inputes
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//check if username is empty
	if (empty(test_input($_POST["name"]))) {
		$nameErr = "Entrer Username"; 
		} else {
			$name = test_input($_POST["name"]);
	}
	if (empty(test_input($_POST["password"]))) {
		$passwordErr = "Entrer Password";
		
		 } else {
			$password = test_input($_POST["password"]);
	}
}
 //validate login coordinates
if (empty($nameErr)&&empty($password)) {
	$stmt = $conn->query("SELECT id FROM 'user'
		WHERE name = '$name' and password = '$password';");
	if ($stmt -> execute()) {
		if ($stmt ->rowcount()==1) {
			session_start();
			$_SESSION["name"] = $name;
			header("location: welcome.php");
			# code..."location:"
		} else {
		   $error =  "username or password didnt match";
		# code...
	}
	# code...
}

}

//catch(PDOException $e)
{
	echo "Error: ".$e->getMessage();
	}
	function test_input($data){
$data = trim($data);
$data = stripcslashes($data);
$data = htmlspecialchars($data);
return $data;
}
	 ?>

<!DOCTYPE html>
<html>
<head>
	<title>User login</title>
</head>
<body align='centre';>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<h1>User login</h1>
		Username: <input type="text" name="name">
		<span><?php echo $nameErr; ?></span>
		<br><br>
		Password: <input type="password" name="password">
        <span><?php echo $passwordErr; ?></span>
		<br><br>
		<span><?php echo $error; ?></span>
		<input type="submit" name="submit" value="login">
	</form>
  <?php $conn=null; ?>
</body>
</html>
