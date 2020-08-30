<?php
    include('connexion3.php');
    $id_U = $_GET['id_U'];
    $query = "DELETE FROM `user` WHERE `user`.`id_U` = '$id_U';";
    if(isset($_POST['refus'])) {
        if(performQuery($query)){
            echo "Account has been rejected.";
        }else{
            echo "Unknown error occured. Please try again.";
        }
    }
?>