<?php
    include("connexion3.php");
    
    if (isset($_POST['search'])){
      $input=$_POST['search'];
      echo "<p>Dans ce tableau vous trouverez la liste des pharmacies qui ont en leur possesion les différents médicaments contenants le terme \"".$input."\"</p>";
      $id_med = " SELECT * FROM `pharmacie` where `id_U` in (
                  SELECT distinct `id_ph` from `stock_med_pharmacie` where `id_med` in (
                  SELECT distinct `ID` from `medicament` where `DENOMINATION_COMMUNE_INTERNATIONALE` LIKE '%$input%' or `NOM_DE_MARQUE` LIKE '%$input%'))";
      $result = $conn->query($id_med);
      $id_med_list = array();
      if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
          print "Nom: " . $row["Nom"];
          print ", Prenom: " . $row["prenom"]."<br>";
        }
      }
    } 
?> 
