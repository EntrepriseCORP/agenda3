<!---------------------------------------------------->
<!--             -temporaire pour vider la bbd-      ->
<!---------------------------------------------------->


<!-- +ajout de la suppresion de table?->


<?php
      $mysqli = new mysqli("localhost", "root", "", "calendrier");
      $requete = "DELETE FROM `events`";
      $resultat = $mysqli->query ($requete);

      header('location:../public/index.php');
?>
