<!DOCTYPE html>
<html lang="en">
<head>

     <title>Medicament</title>

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
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


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
                         <li><a href="listemedicam.php" class="smoothScroll">Medicament</a></li>
                         <li><a href="laboratoire.php" class="smoothScroll">Liste des analyse</a></li>
                         <li><a href="index.php" class="smoothScroll">Médecins</a></li>
                         <li><a href="index.php" class="smoothScroll">Laboratoire</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li> 
                         <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                              <div class="dropdown-menu">
                                   <a class="dropdown-item" href="#">Gérer Profile</a>
                                   <a class="dropdown-item" href="#">Demande_travail</a>
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
          <p>
               Dans ce tableau se trouvent les différents médicaments produits en Algérie. <br></p>
     </div>
     <table class="table table-hover">
        <thead style="background-color: #98ffdda2;">
        <tr>
              <th scope="col">#</th>
              <th scope="col">DENOMINATION_COMMUNE_INTERNATIONALE</th>
              <th scope="col">NOM_DE_MARQUE</th>
              <th scope="col">DOSAGE</th>
              <th scope="col">COND</th>
              <th scope="col">PAYS_DU_LABORATOIRE</th>
              <th scope="col">DUREE_DE_STABILITE</th>
            </tr>
        </thead>
        <tbody>
        <?php
          include("connexion2.php");
          $query = "select * from medicament";
          $stat = $conn->query($query);
          $tab = $stat->fetchAll();
          foreach($tab as $ligne)
          {
               echo "<tr><td>".$ligne ["ID"]."</td><td>".$ligne ["DENOMINATION_COMMUNE_INTERNATIONALE"]."</td><td>".$ligne ["NOM_DE_MARQUE"]."</td><td>".$ligne ["DOSAGE"]."</td><td>".$ligne ["COND"]."</td><td>".$ligne ["PAYS_DU_LABORATOIRE_DETENTEUR_DE_LA_DECISION_DENREGISTREMENT"]."</td><td>".$ligne ["DUREE_DE_STABILITE"]."</td></tr>";  
          }
        ?>
         <!-- <tr>
              <th scope="row">1</th>
              <td>LORATADINE</td>
              <td>GELARTINE</td>
              <td>10MG</td>
              <td>B/30</td>
              <td>ALGERIE</td>
              <td>36 MOIS</td>
        </tr>
        <tr>
              <th scope="row">2</th>
              <td>LORATADINE</td>
              <td>GELARTINE</td>
              <td>10MG</td>
              <td>B/30</td>
              <td>ALGERIE</td>
              <td>36 MOIS</td>
        </tr>
        <tr>
              <th scope="row">3</th>
              <td>LORATADINE</td>
              <td>GELARTINE</td>
              <td>10MG</td>
              <td>B/30</td>
              <td>ALGERIE</td>
              <td>36 MOIS</td>
        </tr> -->
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