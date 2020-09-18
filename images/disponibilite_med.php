<?php
    include('connexion3.php');

    $id_U = $_POST['id_U'];
    $meds = $_POST['medDisponible'];
    foreach ($meds as $med) {
        $med = intval($med);
        $id_U = intval($id_U);
        $query = "INSERT INTO `stock_med_pharmacie` (id_ph, id_med)
        VALUES ('$id_U','$med');";
        $conn->query($query);
    }  

    header("location: index.php");
?>
