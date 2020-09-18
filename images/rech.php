<!DOCTYPE html>
<html lang="en">
<head>

     <title>Resultat de Rechercher</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->



     <!-- HEADER 
     <header>
        <input class="form-control form-control-lg" type="text" placeholder="Rechercher un Medicament">

          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to a Professional Health Care</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
                    </div>

               </div>
          </div>
     </header> -->


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand"><b>S</b>anté Pharma</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="index.php" class="smoothScroll">Accueil</a></li>
                         <li><a href="index.php" class="smoothScroll">Sur SPharma</a></li>
                         <li><a href="medicament.php" class="smoothScroll">Medicament</a></li>
                         <li><a href="laboratoire.php" class="smoothScroll">Liste des analyses</a></li>
                         <li><a href="index.php" class="smoothScroll">Médecins</a></li>
                         <li><a href="index.php" class="smoothScroll">Laboratoires</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li> 
                         <li class="appointment-btn1"><a href="compte.php">S'identifier</a></li>
 <!--
                         <li class="nav-item dropdown">
                              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                   <div class="btn-group" role="group">
                                     <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Profile
                                     </button>
                                     <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                       <a class="dropdown-item" href="#">Gérer Profile</a>
                                       <a class="dropdown-item" href="demandeTrav.php">Demande de travail</a>
                                       <a class="dropdown-item" href="demandeTrav.php">Déconnexion</a>
                                     </div>
                                   </div>
                                 </div>
                         </li> -->

<!--                         <li class="appointment-btn1"><a href="#appointment">S'identifier</a></li> -->

<!--                     <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#appointment" class="btn btn-sm animated-button thar-four">S'identifier</a> </div> -->
                    </ul>
               </div>

          </div>
     </section> 
     <?php
    include("connexion3.php");
    
      $input=$_POST['search'];
     echo "<p style='font-weight:bold; font-size:20px; width:70%; text-align:center; margin:auto; padding:15px;'>Dans ce tableau vous trouverez la liste des pharmacies qui ont en leur possesion les différents médicaments contenants le terme \"".$input."\"</p>";
        ?>
    <div>
    <table class="table">
          <thead>
            <tr>
              <th scope="col">NOM</th>
              <th scope="col">PRENOM</th>
              <th scope="col">EMAIL</th>
              <th scope="col">N ° TEL</th>
              <th scope="col">HEURE D'OVERTURE</th>
              <th scope="col">HEURE DE FERMETURE</th>
              <th scope="col">ADDRES</th>
              <th scope="col">REGION</th>
              <th scope="col">WILAYA</th>

            </tr>
          </thead>
          <tbody>
    <?php
    include("connexion3.php");
    
    if (isset($_POST['search'])){
      $input=$_POST['search'];
     // echo "<p>Dans ce tableau vous trouverez la liste des pharmacies qui ont en leur possesion les différents médicaments contenants le terme \"".$input."\"</p>";
      $id_med = " SELECT * FROM `pharmacie` where `id_U` in (
                  SELECT distinct `id_ph` from `stock_med_pharmacie` where `id_med` in (
                  SELECT distinct `ID` from `medicament` where `DENOMINATION_COMMUNE_INTERNATIONALE` LIKE '%$input%' or `NOM_DE_MARQUE` LIKE '%$input%'))";
      $result = $conn->query($id_med);
      $id_med_list = array();
      if ($result->rowCount() > 0) {
        while($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>".$ligne ["Nom"]."</td><td>".$ligne ["prenom"]."</td><td>".$ligne ["email"]."</td><td>".$ligne ["numTel"]."</td><td>".$ligne ["HOV"]."</td><td>".$ligne ["HOF"]."</td><td>".$ligne ["addres"]."</td><td>".$ligne ["region"]."</td><td>".$ligne ["wilaya"]."</td></tr>";  
        }
      }
    } 
?> 

          </tbody>
          </table>

    </div>
     </body>