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
                         <li><a href="postannonce.php" class="smoothScroll">Annonce</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         <!-- <li class="appointment-btn"><a href="#appointment">Demande Travail</a></li> -->
                         <li class="appointment-btn1"><a href="compte.php">S'identifier</a></li>

                    </ul>
               </div>

          </div>
     </section>


     <!-- ABOUT 
     <section id="about1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                             <!-- <h2 class="wow fadeInUp" data-wow-delay="0.6s"><b>S</b>anté Pharma "Médecine"</h2>
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
     </section> -->


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
                <div class="col-md-6 col-sm-6" style="width:100%;">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Liste Des annonces : </h2>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-sm-12" style="padding: 50px;">
                         	<div class="card">
                              <div class="card-body">
                              <?php 
                                        include("connexion3.php");
                                        $query = "select * from postuler";
                                        $stat = $conn->query($query);
                                        $tab = $stat;
                                        if ($tab->rowCount() > 0) {
                                             while($row = $tab->fetch(PDO::FETCH_ASSOC)) {
                                               print "<h3>". $row["nom"]." ". $row["prenom"]."</h3>";
                                               echo "                                   
                                               <div class='team-contact-info'>
                                               <p><i class='fa fa-phone'></i>". $row['email']."</p>
                                               <p><i class='fa fa-envelope-o'></i>". $row['phone']."</p>
                                               </div>
                                               </div>";
                                               echo "<h3 >". $row["specialiste"]."</h3>";
                                               echo "<p>".$row["dateCreation"]."</p>";
                                               echo "<a  href='index.php'><button type='button' class='btn btn-primary'>Postuler</button>";
                                        } 
                                   }
                                   ?>  
                              </div>
                        	</div>
                         </div> 

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

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Un probléme est servenu ? vous voulez plus de renseignements ? Contactez nous sur l'adresse ou le numéro   suivants : </p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> +213-555-555-555</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">Exemple@gmail.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Amazing Technology</h5></a>
                                        <span>March 08, 2018</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>New Healing Process</h5></a>
                                        <span>February 20, 2018</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                                   <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                                   <p>Sunday <span>Closed</span></p>
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="index.php">Recherche</a>
                                   <a href="medecin.php">Médecins</a>
                                   <a href="index.php">Laboratoire</a>
                                   <a href="#appointment">Demande Travail</a>
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