

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
      echo '<td><a href="/Semaine-transverse-groupe-11/pages/competence.php?id=' . $id . '">competence</a></td>';
      echo '<td><a href="/Semaine-transverse-groupe-11/pages/numérique.php?id=' . $id . '">numérique</a></td>';
    ?>
  </nav>
  
    <br>
    <h1>Axe réactivité</h1>
  </body>
</html>


<?php require "header.php";

// Requête SQL pour sélectionner toutes les données de la table
$sql = "SELECT score,libelle,question FROM reactivite 
inner join reactivite_item on reactivite.iditem = reactivite_item.id
INNER JOIN questionnement_reactivite on reactivite.id = questionnement_reactivite.id
INNER JOIN entreprise on reactivite.identreprise = entreprise.id
    WHERE entreprise.id = $id";
$result = $conn->query($sql);

// Vérifier si des données ont été trouvées
if ($result->num_rows > 0) {

    // Afficher les données dans un tableau HTML
    echo "<table>";
    ?>
    <tr><td>Libelle</td><td>Question</td><td>score</td></tr>
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

