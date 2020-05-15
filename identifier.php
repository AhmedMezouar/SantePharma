<?php 
//session_star();
//connect to database
//$con = mysqli_connect("localhost", "root", "" ,"login");
require_once('connection.php');
if (isset($_POST['register_btn']))
{
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$password=$_POST['password']; 
	$date=$_POST['date'];
	$sexe=$_POST['sexe']; 
	$numAgre=$_POST['numAgre']; 
	$numTel=$_POST['numTel'];
    $PhaMed=$_POST['specialte'];
    $HOV=$_POST['HOV'];
    $HOF=$_POST['HOF'];
	$addres=$_POST['addres'];
	$region=$_POST['region'];
	$wilaya=$_POST['wilaya'];
     
	//if($password != NULL) {
	//create user
	//$password =md5 ($password); // hash password before storing for security purposes
	$sql = "INSERT INTO user(nom, prenom, email, password, date, numAgre, numTel, sexe, specialte,addres, region, wilaya, HOV, HOF) VALUES ('$nom', '$prenom', '$email', '$password', '$date', '$numAgre', '$numTel', '$sexe', '$PhaMed','$addres', '$region', '$wilaya','$HOV','$HOF')";
     echo $sql;     
	 mysqli_query($con, $sql);
	 
	if($PhaMed == 'Pharmacie') {
		header ("location: medicament.php");//redirect to home page
	} else if ($PhaMed == 'Medecin') {
		header ("location: medecin.php");
	}
	/*
}else{
$_SESSION['message'] = "the two passwords do not match";

} */
} 
?>