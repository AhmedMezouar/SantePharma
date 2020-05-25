<?php
session_start();
if (empty($_SESSION["name"])) {
header ("location: index.php");
exit;
}



?>
<!DOCTYPE html>
<html>			
<head>
	<title>Welcome</title>
</head>
<body align = "centre">
	
		<h1>Hi , <?php echo htmlspecialchars($_SESSION["name"]); ?></h1>
		<h2><a href="signout.php"> Sign out</a></h2>
	</form>
</body>
</html>
