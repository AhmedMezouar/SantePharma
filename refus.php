<?php
    include('connexion3.php');
    $id_U = $_POST['id_U'];
    $query = "DELETE FROM `user` WHERE `id_U` = '$id_U'";
    $conn->query($query);
?>