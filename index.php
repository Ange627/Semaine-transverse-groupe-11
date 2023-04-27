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
    <nav>
      <td>
        <a href="pages/creation.php">créer un diagnostic</a>
      </td>
    </nav>
    <h2>Selectionner une entreprise</h2>
    <?php

        // Connexion à la base de données
        $pdo = new PDO('mysql:host=localhost;dbname=bdd-diagnostic', 'root', '');

        // Récupération des entreprises depuis la base de données
        $stmt = $pdo->query('SELECT id, nom FROM entreprise');
        $entreprises = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Affichage du tableau HTML
        echo '<table>';
        echo '<thead><tr><th>Nom de l\'entreprise</th><th>Détails</th></tr></thead>';
        echo '<tbody>';
        foreach ($entreprises as $entreprise) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($entreprise['nom']) . '</td>';
            echo '<td><a href="/Semaine-transverse-groupe-11/pages/home.php?id=' . htmlspecialchars($entreprise['id']) . '&entreprise='. htmlspecialchars($entreprise['nom']) .'">Voir les détails</a></td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    ?>

  </body>
</html>
