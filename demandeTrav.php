<?php 
$dbServername = mysqli_connect("localhost");
$dbUsername = "root";
$dbname = "postuler";

	$name = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['email']);
	$phonenumber = mysql_real_escape_int($_POST['phonenumber']);
	$birthday = mysql_real_escape_int($_POST['birthday']);
	$specialite = mysql_real_escape_string($_POST['specialite']);
	$commentaire = mysql_real_escape_string($_POST['commentaire']);
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Demande De Travail</title>

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
                    <a href="index.html" class="navbar-brand"><b>S</b>anté Pharma</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="index.html" class="smoothScroll">Accueil</a></li>
                         <li><a href="index.html" class="smoothScroll">Sur SPharma</a></li>
                         <li><a href="index.html" class="smoothScroll">Médecins</a></li>
                         <li><a href="index.html" class="smoothScroll">Laboratoire</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li> 
                         <li class="nav-item dropdown">
                              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                   <div class="btn-group" role="group">
                                     <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Profile
                                     </button>
                                     <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                       <a class="dropdown-item" href="#">Gérer Profile</a>
                                       <a class="dropdown-item" href="#">Demande de travail</a>
                                     </div>
                                   </div>
                                 </div>
                         </li>

<!--                         <li class="appointment-btn1"><a href="#appointment">S'identifier</a></li> -->

<!--                     <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#appointment" class="btn btn-sm animated-button thar-four">S'identifier</a> </div> -->
                    </ul>
               </div>

          </div>
     </section> 
    
     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                          <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="#">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Demande De Travaille</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nom</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nom Prénom">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Votre Email">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Date de Naissance</label>
                                        <input type="date" name="date" value="" class="form-control">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Séléctionner votre Spécialité</label>
                                        <select class="form-control">
                                             <option>Les Deux </option>
                                             <option>Infirmier </option>
                                             <option>Vendeur (se) Pharmacie</option>
                                        </select>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Némuro Téléphone</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Némuro De Téléphone ">
                                        <label for="Message">Commentaire : </label>
                                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Valaide</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section> 

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
                                   <a href="index.html">Recherche</a>
                                   <a href="index.html">Médecins</a>
                                   <a href="index.html">Laboratoire</a>
                                   <a href="index.html">Demande Travail</a>
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
