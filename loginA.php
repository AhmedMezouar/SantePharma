<?php 
 session_start();

$db = mysqli_connect("localhost", "root", "" ,"login");

if(isset($_POST["connect_btn"])){
    
    $email=$_POST["email"];
    $password=$_POST["password"];
    
    $sql = "SELECT * FROM user WHERE email = '{$email}' AND password = '{$password}'" ;
            
    $result = mysqli_query($db,$sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
        $_SESSION["session_login"]= $row["email"];
        //echo"vous etes connecte";
        header("location: identifier.php");
    }
    else{
        echo "votre email ou mot de passe incorrects";
    }
    
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> login</title>
</head>
<body>
	<div class="header">
		<h1> login </h1>
	</div>
	<form method="post" action="">
		<table>
			<tr>
				<td>
					Email:</td>
				<td><input type="text" name="email" class="textInput"></td></tr>
				<tr><td>Password:</td>
					<td><input type="text" name="password" class="textInput"></td></tr>
					
						<tr><td></td>
						<td><input type="submit" name="connect_btn" value="connect"></td></tr>
		</table>
	</form>
</body>
</html>