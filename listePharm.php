<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Liste des Pharmacies possedants le médicament</title>

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

     <!-- PRE LOADER 
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>-->


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
                         <li><a href="listemedicam.php" class="smoothScroll">Medicament</a></li>
                         <li><a href="index.php" class="smoothScroll">Médecins</a></li>
                         <li><a href="index.php" class="smoothScroll">Laboratoire</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li> 
                         <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile 
                              </a>
                              <div class="dropdown-menu">
                                   <a class="dropdown-item" href="gererprofile.php">Gérer Profile</a>
                                   <a class="dropdown-item" href="demandeTrav.php">Demande_travail</a>
                                   <div class="dropdown-divider"></div>
                                   <a class="dropdown-item" href="#">Déconnexion</a>
                              </div>
                         </li> <!--
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
     <div class="tab_def">
        <?php
            include("connexion3.php");
            if (isset($_POST['search_med_btn']))
             {
                 $input=$_POST['searchB'];
             //    $query = "SELECT * FROM pharmacie where id_U in (SELECT distinct id_ph from stock_med_pharmacie where id_med in (SELECT distinct ID from medicament where DENOMINATION_COMMUNE_INTERNATIONALE = LIKE '%". $input ."%' or NOM_DE_MARQUE = LIKE '%". $input ."%'))";
             //    $query = "select * FROM user where id_U in (SELECT distinct id_U from user where id_U in (SELECT distinct ID from medicament where DENOMINATION_COMMUNE_INTERNATIONALE = LIKE '%". $input ."%' or NOM_DE_MARQUE = LIKE '%". $input ."%'))";
             } 
            echo "<p>Dans ce tableau vous trouverez la liste des pharmacies qui ont en leur possesion les différents médicaments contenants le terme ".$input."</p>"
        ?>       
     </div>
     
     <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">PHARMACIE</th>
              <th scope="col">WILAYA</th>
              <th scope="col">ADRESSE</th>
              <th scope="col">TELEPHONE</th>
              <th scope="col">EMAIL</th>
            </tr>
          </thead>
          <tbody>
          <?php
               include("connexion3.php");
               $query = "select * FROM user where id_U in (SELECT distinct id_U from user where id_U in (SELECT distinct ID from medicament where DENOMINATION_COMMUNE_INTERNATIONALE = LIKE '%". $input ."%' or NOM_DE_MARQUE = LIKE '%". $input ."%'))";
               $stat = $conn->query($query);
               $tab = $stat->fetchAll();
               foreach($tab as $ligne)
               {
                    echo "<tr><td>".$ligne ["id_U"]."</td><td>".$ligne ["Nom"]."</td><td>".$ligne ["wilaya"]."</td><td>".$ligne ["addres"]."</td><td>".$ligne ["numTel"]."</td><td>".$ligne ["email"]."</td></tr>";  
               }
          ?>   
          </tbody>
        </table>

     <footer>

       <div>
          <div>
                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="index.php">Recherche</a>
                                   <a href="index.php">Médecins</a>
                                   <a href="index.php">Laboratoire</a>
                                   <a href="index.php">Demande Travail</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
