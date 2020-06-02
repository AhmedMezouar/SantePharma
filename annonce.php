<?php 

require_once('connection.php');
     if (isset($_POST['valid']))
     {

          $nom = $_POST['nom'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $dateN = $_POST['dateN'];
          $specialiste = $_POST['specialiste'];
          /*     
          if(empty($_POST['email']) || empty($_POST['nom'] || empty($_POST['phone'] || empty($_POST['dateN'] || empty($_POST['specialiste'] || empty($_POST['commentaire']))
          {
               header("location:medicament.html?Empty= Please Fill in the Blanks");
          } */
          $sql = "INSERT INTO postuler(nom, email, phone,dateN, specialiste) VALUES ('$nom', '$email', '$phone', '$dateN', '$specialiste')";
          mysqli_query($con, $sql);
          header ('location: medicament.php');
          $_SESSION ['message'] = "Votre demande a bien été transmise";
     }
?>