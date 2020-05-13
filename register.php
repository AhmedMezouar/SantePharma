
<?php 
//session_star();
//connect to database
$db = mysqli_connect("localhost", "root", "" ,"login");
if (isset($_POST['register_btn']))
{
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$password=$_POST['password']; 
	$date=$_POST['date'];
	$sexe=$_POST['sexe']; 
	$numAgre=$_POST['numAgre']; 
	$numTel=$_POST['numTel'];
	$PhaMed=$_POST['specialte'];
	//if($password != NULL) {
	//create user
	$password =md5 ($password); // hash password before storing for security purposes
	$sql = "INSERT INTO user(nom, prenom, email, password, date, numAgre, numTel, sexe, specialte) VALUES ('$nom', '$prenom', '$email', '$password', '$date', '$numAgre', '$numTel', '$sexe', '$PhaMed')";
	mysqli_query($db, $sql);
	$_SESSION ['message'] = "You are now logged in";
	$_SESSION ['nom'] = $nom;
	header ("location: medicament.html");//redirect to home page
	/*
}else{
$_SESSION['message'] = "the two passwords do not match";

} */
}
?> 
<?php
session_start();
if(isset($_POST['email']) && isset($_POST['password']))
{

    if($email !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM login where 
              nom_utilisateur = '".$email."' and mot_de_passe = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['email'] = $email;
           header('Location: principale.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
?>
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
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Address Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mot De Passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                    <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</small>
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit">Connecter</button>
                </form>
            </div>
        </section>
      </div>
    <div class="col-sm-8"  method="post" action="register.php">
        <h2>Crée un Compte</h2>
            <section id="sign" method="post" action="register.php">
				<form method="post" action="register.php">
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
                                        <label for="select"> Sexe </label>
                                        <select class="form-control" name="sexe">
                                             <option value="homme">Homme </option>
                                             <option value="femme">Femme </option>
                                        </select>
                                   </div>
                                   <div class="form-group col-md-6">
                                        <label for="inputState">Ouvre à :</label>
                                        <select id="inputState" class="form-control">
                                          <option selected>Heure de Ouverture</option>
                                          <option>01:00</option>
                                          <option>02:00</option>
                                          <option>03:00</option>
                                          <option>04:00</option>
                                          <option>05:00</option>
                                          <option>06:00</option>
                                          <option>07:00</option>
                                          <option>08:00</option>
                                          <option>09:00</option>
                                          <option>10:00</option>
                                          <option>11:00</option>
                                          <option>12:00</option>
                                          <option>13:00</option>
                                          <option>14:00</option>
                                          <option>15:00</option>
                                          <option>16:00</option>
                                          <option>17:00</option>
                                          <option>18:00</option>
                                          <option>19:00</option>
                                          <option>20:00</option>
                                          <option>21:00</option>
                                          <option>22:00</option>
                                          <option>23:00</option>
                                          <option>00:00</option>
                                        </select>
                                      </div>

                                      <div class="form-group col-md-6">
                                        <label for="inputState">Fermé à :</label>
                                        <select id="inputState" class="form-control">
                                          <option selected>Heure de Fermeture</option>
                                          <option>01:00</option>
                                          <option>02:00</option>
                                          <option>03:00</option>
                                          <option>04:00</option>
                                          <option>05:00</option>
                                          <option>06:00</option>
                                          <option>07:00</option>
                                          <option>08:00</option>
                                          <option>09:00</option>
                                          <option>10:00</option>
                                          <option>11:00</option>
                                          <option>12:00</option>
                                          <option>13:00</option>
                                          <option>14:00</option>
                                          <option>15:00</option>
                                          <option>16:00</option>
                                          <option>17:00</option>
                                          <option>18:00</option>
                                          <option>19:00</option>
                                          <option>20:00</option>
                                          <option>21:00</option>
                                          <option>22:00</option>
                                          <option>23:00</option>
                                          <option>00:00</option>
                                        </select>
                                      </div>
                                   
                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Némuro D'agrément</label>
                                        <input type="tel" class="form-control" id="phone" name="numAgre" placeholder="Numéro d'agrément">
                                   </div>
                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Némuro Téléphone</label>
                                        <input type="tel" class="form-control" id="phone" name="numTel" placeholder="Némuro De Téléphone ">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">J'accepte les termes et conditions pour m'inscrire à ce service.</label>
									   </div>
									   <input type="submit" name="register_btn" value="Register">
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
