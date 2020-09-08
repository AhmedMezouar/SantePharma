<?php
require_once('connection.php');
session_start();
    if(isset($_POST['connect']))
    {
       if(empty($_POST['email']) || empty($_POST['Password']))
       {
           echo "<script> alert('Veuillez Remplir Le Vide')</script>";
           //header("location: compte.php");
           header("location: compte.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            //$query="select * from user where email='".$_POST['email']."' and password='".$_POST['Password']."'";
            $query="select * from pharmacie where email='".$_POST['email']."' and password='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);
            
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['email'];
                    header ("location: listemedicam.php");
            } 

            $query="select * from medecin where email='".$_POST['email']."' and password='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);
            
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['email'];
                    header ("location: medecin.php");
            }
                 /*else if ($_POST['specialite'] == 'Medecin'){
                    header ("location: medecin.php");//redirect to home page 
                } else  if ($_POST['specialite'] == 'Pharmacie'){
                    header ("location: listemedicam.php");
                } */
                
            /*  
                else if (specialte == 'Pharmacie'){
                    header ("location: listemedicam.php");
                }  */          
            
            /*
            if ($_POST['email'] == 'admin@gmail.com') {
                header("location: adminPanel.php");
                echo "Thank you";
*/
            else
            {
                echo "<script> alert('Email ou le mot de pass incorrect')</script>";
                header("location: compte.php?Invalid= L'email ou le mot de pass incorrect ");
            }
       }
    }

    else{
        echo 'Not Working Now Guys';
    }                       
?> 
