<!DOCTYPE html>
<html lang="fr">
<head>

     <title>Santé Pharmacie - Médecine -</title>

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
                         <!-- <li class="appointment-btn"><a href="#appointment">Demande Travail</a></li> -->
                         <li class="appointment-btn1"><a href="compte.php">S'identifier</a></li>

                    </ul>
               </div>

          </div>
     </section>


     <!-- ABOUT -->
     <section id="about1" style="background: url('images/analyse1.jpg') no-repeat top center; background-size: cover; padding-top: 150px;
    padding-bottom: 150px;">
          <div class="container">
               <div class="row">
               

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info" style="margin:auto;">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s"  style="color:white; "><b>S</b>anté Pharma "Analyses"</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p style="color:white;">Un laboratoire de biologie médicale (abrégé en LBM), ou, anciennement, laboratoire d'analyses médicales (LAM), est un lieu où sont prélevés et analysés divers fluides biologiques d'origine humaine sous la responsabilité des biologistes médicaux, qui en interprètent les résultats dans le but de participer au diagnostic et au suivi de certaines maladies. 
                                   Besoin urgent de trouver les LBM à proximité ? </p>
                                        <p  style="color:white;">Santé-Pharma met à votre disposition le liste des différents laboratoires ainsi que tous les examens qui y sont disponibles.
                                   Ajouté à cela, les différents centres de radiographies présents dans votre région avec leurs différents types de radiographies disponibles.</p>
                                        
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">
               <h2>Liste des Analyses</h2>
               <table class="table table-hover" style="width:100%">
                    <thead style="background:#ce2f2f; color:white; vertical-align: middle;">
                    <tr>
                         <th scope="col">#</th>
                         <th scope="col">NOM D'ANALYSE</th>
                    </tr>
                    </thead>
                    <tbody>
                         <?php
          include("connexion3.php");
          $query = "select * from examenbioch";
          $stat = $conn->query($query);
          $tab = $stat->fetchAll();
          foreach($tab as $ligne)
          {
               //echo "<tr><td>".$ligne ["id_U"]."</td></tr>";
               echo "<tr><td>".$ligne ["ID"]."</td><td>".$ligne ["NOM_DE_ANALYSE"]."</td></tr>"; 
          }
        ?>
                   <!-- <tr>
                         
                         <td>MEZOUAR</td>
                         <td>AHMED</td>
                         <td>généraliste</td>
                         <td>Cité 500 longement-MAGHNIA-</td>
                         <td>Tlemcen</td>
                         <td>08:00 - 16:00</td>
                         <td>+2135 53 73 34 97 </td>
                         <td>ahmed.mezouar26@gmail.com</td>
                    </tr> --> 

                    </tbody>
                    </table>
               </div>
          </div>
     </section>

     <!-- GOOGLE MAP -->
     <!--<section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
        <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section> -->          


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5" id="footer">
          <div class="container">
               <div class="row">
               
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

