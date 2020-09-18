<?php
    include('connexion3.php');

    $id_U = $_POST['id_U'];
    $meds = $_POST['analyseDisponible'];
    foreach ($meds as $med) {
        $med = intval($med);
        $id_U = intval($id_U);
        $query = "INSERT INTO `stock_bil_exam` (id_B, id_E)
        VALUES ('$id_U','$med');";
        $conn->query($query);
    }  

    header("location: index.php");
?>
