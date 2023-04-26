<?php require "pages/header.php";

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Diagnostic entreprise hypromat</title>
    <link href="style/style.css" rel="stylesheet">
  </head>
  <body>
    <h1>Diagnostic des entreprises</h1>

    <h2>Selectionner une entreprise</h2>
    <nav>
      <ul>
        <li><a href="pages/competence.php">Compétence</a></li>
        <li><a href="pages/numérique.php">Numérique</a></li>
        <li><a href="pages/réactivité.php">Réactivité</a></li>
      </ul>
    </nav>

    <?php
            
    // Requête SQL pour sélectionner toutes les données de la table
    $sql = "SELECT nom From entreprise";
    $result = $conn->query($sql);

    // Vérifier si des données ont été trouvées
    if ($result->num_rows > 0) {

        // Afficher les données dans un tableau HTML
        echo "<table>";
        ?>
        <tr><td>Entrepries</td><td>Lien</td></tr>
        <?php

        // Boucle pour afficher chaque ligne de données
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["nom"]."</td></tr>";
        }

        echo "</table>";

    } else {
        echo "0 résultats";
    }

    // Fermer la connexion à la base de données
    $conn->close();


    ?>

  </body>
</html>
