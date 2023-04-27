<?php require "header.php";

  $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  $entreprise = isset($_GET['entreprise']) ? intval($_GET['entreprise']) : 0;

  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Diagnostic entreprise hypromat</title>
    <link href="../style/style.css" rel="stylesheet">
  </head>
  <body>
    <h1>Diagnostic entreprise </h1>
    <p>Liens vers les différents axes d'amélioration</p>
     <nav>
        <a href="/Semaine-transverse-groupe-11/index.php">accueil</a>
    <?php
        echo '<td><a href="/Semaine-transverse-groupe-11/pages/competence.php?id=' . $id . '">compétence</a></td>';
        echo '<td><a href="/Semaine-transverse-groupe-11/pages/numérique.php?id=' . $id . '">numérique</a></td>';
        echo '<td><a href="/Semaine-transverse-groupe-11/pages/réactivité.php?id=' . $id . '">réactivité</a></td>';
    ?>

    </nav>


    <h2>Synthèse</h2>
    <p>Axe Réactivité 3.3/5</p>
    <p>Axe Compétences 2.9/5</p>
    <p>Axe Numérique 3.6/5</p>
  


  </body>
</html>
