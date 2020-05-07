
<?php 
 session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$bdname = 'santepharma';


$conn = mysqli_connect($servername,$username,$password,$bdname);
if(isset($_POST["connect_btn"])){
    
    $email=$_POST["email"];
    $password=$_POST["password"];
    
    $sql = "SELECT * FROM login WHERE email = '{$email}'' and password = '{$password}'" ;
            
    $result = mysqli_query($conn,$sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
        $_SESSION["session_login"]= $row["email"];
        //echo"vous etes connecte";
        header("location:register.php");
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
