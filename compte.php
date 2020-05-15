<!DOCTYPE html>
<html lang="en">
<head>

     <title>Insecription</title>

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
                         <li><a href="index.php" class="smoothScroll">Médecins</a></li>
                         <li><a href="index.php" class="smoothScroll">Laboratoire</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
<!--                         <li class="appointment-btn1"><a href="#appointment">S'identifier</a></li> -->

<!--                     <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#appointment" class="btn btn-sm animated-button thar-four">S'identifier</a> </div> -->
                    </ul>
               </div>

          </div>
     </section>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <h2>Identification</h2>
        <section id="sign">
             <div class="wow fadeInUp" data-wow-delay="0.8s">
                <form method="post" action="process.php">
                <?php
                    if(@$_GET['Empty']==true)
                    {
                ?>
                    <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                <?php
                    }
                ?>


                <?php
                    if(@$_GET['Invalid']==true)
                    {
                ?>
                    <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                <?php
                    }
                ?>
                  <div class="form-group" method="post"  action="erreur.php">
                    <label for="exampleInputEmail1"> Address Email</label>
                    <input type="email" class="form-control mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre email" name=email >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mot De Passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" name=Password>
               <!--     <small id="emailHelp" class="form-text text-muted"  >Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</small> -->
                  </div>
                  <button type="submit" class="btn btn-primary" name="connect">Connecter</button>
                </form>
            </div>
        </section>
      </div>
    <div class="col-sm-8">
        <h2>Crée un Compte</h2>
            <section id="sign">
				<form method="post" action="identifier.php">
                <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nom</label>
                                        <input type="text" class="form-control" id="name" name="nom" placeholder="Nom">
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Prénom</label>
                                        <input type="text" class="form-control" id="name" name="prenom" placeholder="Prénom">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Votre Email">
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Mot de Passe </label>
                                        <input type="password" class="form-control" id="name" name="password" placeholder="Mot de Passe">
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Date de Naissance</label>
                                        <input type="date" name="date" value="" class="form-control">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Séléctionner votre Spécialité</label>
                                        <select class="form-control" name="specialte">
                                             <option value="Pharmacie">Pharmacie </option>
                                             <option value="Medecin">Médecin </option>
                                        </select>
                                   </div>
                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Adresse complète</label>
                                        <input type="tel" class="form-control" name="addres" placeholder="Adresse complète">
                                   </div>
                                   <div class="col-md-4 col-sm-4">
                                        <label for="telephone">Région</label>
                                        <input type="tel" class="form-control" name="region" placeholder="Région ( Daira )">
                                   </div>
                                   <div class="col-md-4 col-sm-4">
                                        <label for="telephone">Wilaya</label>
                                        <input type="tel" class="form-control" name="wilaya" placeholder="Wilaya ..">
                                   </div>
                                   <div class="col-md-4 col-sm-4">
                                        <label for="select"> Sexe </label>
                                        <select class="form-control" name="sexe">
                                             <option value="homme">Homme </option>
                                             <option value="femme">Femme </option>
                                        </select>
                                   </div>
                                   <div class="form-group col-md-6">
                                        <label for="inputState">Ouvre à :</label>
                                        <select id="inputState" class="form-control" name="HOV">
                                          <option selected>Heure de Ouverture</option>
                                          <option value="01:00">01:00</option>
                                          <option value="02:00">02:00</option>
                                          <option value="03:00">03:00</option>
                                          <option value="04:00">04:00</option>
                                          <option value="05:00">05:00</option>
                                          <option value="06:00">06:00</option>
                                          <option value="07:00">07:00</option>
                                          <option value="08:00">08:00</option>
                                          <option value="09:00">09:00</option>
                                          <option value="10:00">10:00</option>
                                          <option value="11:00">11:00</option>
                                          <option value="12:00">12:00</option>
                                          <option value="13:00">13:00</option>
                                          <option value="14:00">14:00</option>
                                          <option value="15:00">15:00</option>
                                          <option value="16:00">16:00</option>
                                          <option value="17:00">17:00</option>
                                          <option value="18:00">18:00</option>
                                          <option value="19:00">19:00</option>
                                          <option value="20:00">20:00</option>
                                          <option value="21:00">21:00</option>
                                          <option value="22:00">22:00</option>
                                          <option value="23:00">23:00</option>
                                          <option value="24:00">00:00</option>
                                        </select>
                                      </div>

                                      <div class="form-group col-md-6">
                                        <label for="inputState">Fermé à :</label>
                                        <select id="inputState" class="form-control" name="HOF">
                                          <option selected>Heure de Fermeture</option>
                                          <option value="01:00">01:00</option>
                                          <option value="02:00">02:00</option>
                                          <option value="03:00">03:00</option>
                                          <option value="04:00">04:00</option>
                                          <option value="05:00">05:00</option>
                                          <option value="06:00">06:00</option>
                                          <option value="07:00">07:00</option>
                                          <option value="08:00">08:00</option>
                                          <option value="09:00">09:00</option>
                                          <option value="10:00">10:00</option>
                                          <option value="11:00">11:00</option>
                                          <option value="12:00">12:00</option>
                                          <option value="13:00">13:00</option>
                                          <option value="14:00">14:00</option>
                                          <option value="15:00">15:00</option>
                                          <option value="16:00">16:00</option>
                                          <option value="17:00">17:00</option>
                                          <option value="18:00">18:00</option>
                                          <option value="19:00">19:00</option>
                                          <option value="20:00">20:00</option>
                                          <option value="21:00">21:00</option>
                                          <option value="22:00">22:00</option>
                                          <option value="23:00">23:00</option>
                                          <option value="24:00">00:00</option>
                                        </select>
                                      </div>
                                   
                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Némuro D'agrément</label>
                                        <input type="tel" class="form-control" id="phone" name="numAgre" placeholder="Numéro d'agrément">
                                   </div>
                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Némuro Téléphone</label>
                                        <input type="tel" class="form-control" id="phone" name="numTel" placeholder="Némuro De Téléphone ">
                                    
                                       <button type="submit" class="btn btn-primary" name="register_btn" value="Register" >S'inscrire</button>
                                   </div>
				</div>
				</form>
    </section>
      </div>
  </div>

</div>

    
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
