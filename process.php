
<?php
require_once('connection.php');
session_start();
    if(isset($_POST['connect']))
    {
       if(empty($_POST['email']) || empty($_POST['Password']))
       {
            header("location:compte.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from user where email='".$_POST['email']."' and password='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['email'];
                header("location:listemedicam.php");

                /*
                if($PhaMed == 'medecin') {
                    header("location:medecin.php");
                } else if (strtolower($PhaMed) == 'pharmacie') {
                    header("location:listemedicam.php");
                }else if (strtolower($PhaMed) == 'laboratoire') {
                    header("location:listelaboratoire.php");
                } */
                
            }
            else
            {
                header("location:compte.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    } 
 
?>