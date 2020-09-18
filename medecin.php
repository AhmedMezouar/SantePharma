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
                         <li><a href="listemedicam.php" class="smoothScroll">Medicament</a></li>
                         <li><a href="laboratoire.php" class="smoothScroll">Liste des analyse</a></li>
                         <li><a href="medecin.php" class="smoothScroll">Médecins</a></li>
                         <li><a href="#team1" class="smoothScroll">Laboratoire</a></li>
                         <li><a href="postannonce.php" class="smoothScroll">Annonce</a></li>
                         <li><a href="#footer" class="smoothScroll">Contact</a></li>
                         <!-- <li class="appointment-btn"><a href="#appointment">Demande Travail</a></li> -->
                         <li class="appointment-btn1"><a href="compte.php">S'identifier</a></li>

                    </ul>
               </div>

          </div>
     </section>


     <!-- ABOUT -->
     <section id="about1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s"><b>S</b>anté Pharma "Médecine"</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>La médecine au sens de pratique, est la science témoignant de l'organisation du corps humain, 
                                        son fonctionnement normal, et cherchant à préserver la santé (physique comme mentale) par la prévention 
                                        et le traitement (thérapie) des maladies. </p>
                                        <p>Besoin d’un médecin à proximité dans un n’importe quel domaine ?
                                        Santé-Pharma met à votre disposition les différents médecins traitants ou généralistes 
                                        dans votre région, classés par spécialité, avec l’adresse de leurs cabinets afin 
                                        de trouver le plus rapidement une solution à votre problème de santé et ce, même en cas d’urgence.</p>
                                        
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
               <h2>Liste des Médecins</h2>
               <table class="table table-hover" style="width:100%">
                    <thead style="background:#4773d1; color:white; vertical-align: middle;">
                    <tr>
                         <th scope="col">#</th>
                         <th scope="col">NOM</th>
                         <th scope="col">PRENOM</th>
                         <th scope="col">SPECIALISTE</th>
                         <th scope="col">ADRESSE</th>
                         <th scope="col">WILAYA</th>
                         <th scope="col">HEURE D'OVERTURE</th>
                         <th scope="col">HEURE DE FERMETURE</th>
                         <th scope="col">NUMERO DE TELEOHONE</th>
                         <th scope="col">EMAIL</th>
                    </tr>
                    </thead>
                    <tbody>
                         <?php
          include("connexion3.php");
          $query = "select * from medecin";
          $stat = $conn->query($query);
          $tab = $stat->fetchAll();
          foreach($tab as $ligne)
          {
               //echo "<tr><td>".$ligne ["id_U"]."</td></tr>";
               echo "<tr><td>".$ligne ["id_U"]."</td><td>".$ligne ["Nom"]."</td><td>".$ligne ["prenom"]."</td><th>".$ligne ["specialite"]."</th><td>".$ligne ["addres"]."</td><td>".$ligne ["wilaya"]."</td><td>".$ligne ["HOV"]."</td><td>".$ligne ["HOF"]."</td><td>".$ligne ["numTel"]."</td><td>".$ligne ["email"]."</td></tr>"; 
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

