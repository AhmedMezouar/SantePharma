<?php
    include('connection.php');
    $id_U = $_GET['id_U'];
    $query = "select * from `user` where `id_U` = '$id_U'; ";
    if(isset($_POST['accept'])) {
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $email=$_POST['email'];
            $password=$_POST['password']; 
            $date=$_POST['date'];
            $sexe=$_POST['sexe']; 
            $numAgre=$_POST['numAgre']; 
            $numTel=$_POST['numTel'];
            $PhaMed=$_POST['choix'];
            $HOV=$_POST['HOV'];
            $HOF=$_POST['HOF'];
            $addres=$_POST['addres'];
            $region=$_POST['region'];
            $wilaya=$_POST['wilaya'];
            $specialite=$_POST['specialite'];
            
            $query = "INSERT INTO `medecin` (nom, prenom, email, password, date, numAgre, numTel, sexe, choix,addres, region, wilaya, HOV, HOF, specialite) VALUES ('$nom', '$prenom', '$email', '$password', '$date', '$numAgre', '$numTel', '$sexe', '$PhaMed','$addres', '$region', '$wilaya','$HOV','$HOF','$specialite')";
        }
        $query .= "DELETE FROM `user` WHERE `user`.`id_U` = '$id_U';";
        if(performQuery($query)){
            echo "Account has been accepted.";
        }else{
            echo "Unknown error occured. Please try again.";
        }
    }else{
        echo "Error occured.";
    }
}
    
?>