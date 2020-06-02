<?php
    session_start(); //we need session for the log in thingy XD 
    include("connection.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Administration</title>

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
                         <li><a href="index.php" class="smoothScroll">Déconnexion</a></li>
<!--                         <li class="appointment-btn1"><a href="#appointment">S'identifier</a></li> -->

<!--                     <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#appointment" class="btn btn-sm animated-button thar-four">S'identifier</a> </div> -->
                    </ul>
               </div>
          </div> 
          </section>
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
              <div class="tab_def">
              <p>
                    Côté D'administration
               </p>
             </div> 
        </div>
             <form  method="post" action="accept.php">
               <table class="table table-hover table-dark" style="width:100%">
                    <thead style="background:#999"> 
                         <tr>
                         <th scope="col">Id_User</th>
                         <th scope="col">Nom</th>
                         <th scope="col">Prenom</th>
                         <th scope="col">Date De Naissance</th>
                         <th scope="col">Email</th>
                         <th scope="col">Pha_Medecin</th>
                         <th scope="col">Opération</th>
                         </tr>
                    </thead>
                    <tbody>
                    <tr>
                         <td scope="col">1</td>
                         <td scope="col">Mezouar</td>
                         <td scope="col">Ahmed</td>
                         <td scope="col">26-09-1998</td>
                         <td scope="col">ahmed.mezouar26@gmail.com</td>
                         <th scope="col">Pharmacie</th>
                         <td scope="col">
                         <button type="button" class="btn btn-success" name="accept" value="accpet">Accept</button>
                         <button type="button" class="btn btn-danger">Refusé</button>
                         <!-- <a href="accept.php?id=<?php echo $row['id'] ?>" class="btn btn-primary my-2">Accept</a>
                         <a href="reject.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary my-2">Reject</a> -->
                         </td>
                    </tr>
                    <!-- <?php
                         //include("connection.php");
                         //require_once('connection.php');
                         //$query = "SELECT * FROM user";
                         //$stat1 = $conn->query($query);
                         //$tab1 = $stat1->fetchAll();
                         //foreach($tab1 as $ligne)
                         {
                         //  echo "<tr><td>".$ligne ["id_U"]."</td><td>".$ligne ["Nom"]."</td><td>".$ligne ["prenom"]."</td><td>".$ligne ["date"]."</td><td>".$ligne ["email"]."</td><td>".$ligne ["choix"]."</td></tr>";  
                         }
                    ?>   

                    </tbody>
                    </table>
            </form> -->
              </div>
            </div>
          </div>
          
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
