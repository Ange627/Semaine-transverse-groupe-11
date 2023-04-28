

<?php require "header.php";

    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Axe compétence</title>
    <link href="../style/style.css" rel="stylesheet">
  </head>
  <body>
    <nav>
    <?php 
      echo '<td><a href="/Semaine-transverse-groupe-11/pages/home.php?id=' . $id . '">home</a></td>';
      echo '<td><a href="/Semaine-transverse-groupe-11/pages/numérique.php?id=' . $id . '">numérique</a></td>';
      echo '<td><a href="/Semaine-transverse-groupe-11/pages/réactivité.php?id=' . $id . '">réactivité</a></td>';
      ?>
    </nav>
    <br>
    <h1>Axe compétence</h1>
  </body>
</html>


<?php

    // Requête SQL pour sélectionner toutes les données de la table
    $sql = "SELECT identreprise,score, question , libelle from competence 
    INNER JOIN questionnement_competence on competence.idquestionnement = questionnement_competence.id
    INNER JOIN competence_item on competence.iditem = competence_item.id
    WHERE identreprise = $id";
    $result = $conn->query($sql);

    // Vérifier si des données ont été trouvées
    if ($result->num_rows > 0) {

        // Afficher les données dans un tableau HTML
        echo "<table>";
        ?>
        <thead><tr><th>Libelle</th><th>Question</th><th>score</th></tr></thead>
        <?php

        // Boucle pour afficher chaque ligne de données
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["libelle"]."</td><td>".$row["question"]."</td><td>".$row["score"]."</td></tr>";
        }

        echo "</table>";

    } else {
        echo "0 résultats";
    }

    // Fermer la connexion à la base de données
    $conn->close();
?>

