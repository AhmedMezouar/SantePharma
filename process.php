<?php
require_once('connection.php');
session_start();
    if(isset($_POST['connect']))
    {
       if(empty($_POST['email']) || empty($_POST['Password']))
       {
            header("location: compte.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from user where email='".$_POST['email']."' and password='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['email'];
                /*
                if(specialte == 'Medecin') { */
                    header ("location: medicament.php");//redirect to home page 
                
            /*  
                else if (specialte == 'Pharmacie'){
                    header ("location: medicament.php");
                }  */          
            }
            else
            {
                header("location: compte.php?Invalid= L'email ou le mot de pass incorrect ");
            }
       }
    }

    else{
        echo 'Not Working Now Guys';
    }                       
?> 
