<?php
    include('connexion3.php');

    $id_U = $_POST['id_U'];
    $query = "SELECT * FROM `user` WHERE `id_U` = '$id_U'";
    $result = $conn->query($query);
    if($result->rowCount() > 0){
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $id_U=$row['id_U'];
            $nom=$row['Nom'];
            $prenom=$row['prenom'];
            $email=$row['email'];
            $password=$row['password']; 
            $date=$row['date'];
            $sexe=$row['Sexe']; 
            $numAgre=$row['numAgre']; 
            $numTel=$row['numTel'];
            $PhaMed=$row['choix'];
            $HOV=$row['HOV'];
            $HOF=$row['HOF'];
            $addres=$row['addres'];
            $region=$row['region'];
            $wilaya=$row['wilaya'];
            $specialite=$row['specialite'];
            $accept=$row['accept'];

            if(strtolower($PhaMed) == 'medecin') {
                $query = "INSERT INTO `medecin` (id_U, Nom, prenom, email, password, date, numAgre, numTel, Sexe, choix,addres, region, wilaya, HOV, HOF, specialite,accept) VALUES ('$id_U', '$nom', '$prenom', '$email', '$password', '$date', '$numAgre', '$numTel', '$sexe', '$PhaMed','$addres', '$region', '$wilaya','$HOV','$HOF','$specialite','$accept')";
                $conn->query($query);
            } else if (strtolower($PhaMed) == 'pharmacie') {
                $query = "INSERT INTO `pharmacie` (id_U, Nom, prenom, email, password, date, numAgre, numTel, Sexe, choix,addres, region, wilaya, HOV, HOF, specialite,accept) VALUES ('$id_U', '$nom', '$prenom', '$email', '$password', '$date', '$numAgre', '$numTel', '$sexe', '$PhaMed','$addres', '$region', '$wilaya','$HOV','$HOF','$specialite','$accept')";
                $conn->query($query);
            } else if (strtolower($PhaMed) == 'laboratoire') {
                $query = "INSERT INTO `laboratoire` (id_U, Nom, prenom, email, password, date, numAgre, numTel, Sexe, choix,addres, region, wilaya, HOV, HOF, specialite,accept) VALUES ('$id_U', '$nom', '$prenom', '$email', '$password', '$date', '$numAgre', '$numTel', '$sexe', '$PhaMed','$addres', '$region', '$wilaya','$HOV','$HOF','$specialite','$accept')";
                $conn->query($query);
            }
        }
        $query = "UPDATE `user` SET accept=1 WHERE `id_U` = '$id_U';";
        $conn->query($query);
        /*if(performQuery($query)){
            echo "Account has been accepted.";
        }else{
            echo "Unknown error occured. Please try again.";
        }*/
    }else{
        echo "Error occured.";
    }
    
?>