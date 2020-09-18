<?php 

require_once('connection.php');
     if (isset($_POST['valid']))
     {

          $nom = $_POST['nom'];
          $prenom = $_POST['prenom'];
          $email = $_POST['email'];
          $dateN = $_POST['dateN'];
          $specialiste = $_POST['specialiste'];
          $phone = $_POST['phone'];
          /*     
          if(empty($_POST['email']) || empty($_POST['nom'] || empty($_POST['phone'] || empty($_POST['dateN'] || empty($_POST['specialiste'] || empty($_POST['commentaire']))
          {
               header("location:medicament.html?Empty= Please Fill in the Blanks");
          } */
          $sql = "INSERT INTO postuler (nom, prenom, email, dateN, specialiste, phone) VALUES ('$nom','$prenom', '$email', '$dateN', '$specialiste', '$phone')";
          mysqli_query($con, $sql);
          header ('location: index.php');
     }
?>