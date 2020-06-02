
<?php
 
    $con=mysqli_connect('localhost','root','','santepharma');
 
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>