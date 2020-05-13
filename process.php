
<?php
require_once('connection.php');
session_start();
    if(isset($_POST['connect']))
    {
       if(empty($_POST['email']) || empty($_POST['Password']))
       {
            header("location:identifier.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from user where email='".$_POST['email']."' and password='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['email'];
                header("location:medicament.html");
            }
            else
            {
                header("location:identifier.php?Invalid= L'email ou le mot de pass inncorrect ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }
 
?>