
<?php
require_once('connection.php');
session_start();

    if(isset($_POST['connect']))
    {
        $PhaMed=$_POST['choix'];
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
                echo "$PhaMed";
                $_SESSION['User']=$_POST['email'];
                if(strtolower($PhaMed) == 'admin'){
                    header("location:adminPanel.php");
                }else if(strtolower($PhaMed) == 'medecin') {
                    header("location:listeMedecin.php");
                } else if (strtolower($PhaMed) == 'pharmacie') {
                    header("location:listemedicam.php");
                }else if (strtolower($PhaMed) == 'laboratoire') {
                    header("location:listelaboratoire.php");
                } 
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