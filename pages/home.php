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

    <?php
// Récupération des scores de la table reactivité
$requete_reactivite = "SELECT score FROM reactivite WHERE identreprise='$id'";
$resultat_reactivite = mysqli_query($conn, $requete_reactivite);
$scores_reactivite = mysqli_fetch_all($resultat_reactivite, MYSQLI_ASSOC);

// Récupération des scores de la table numérique
$requete_numerique = "SELECT score FROM numerique WHERE identreprise='$id'";
$resultat_numerique = mysqli_query($conn, $requete_numerique);
$scores_numerique = mysqli_fetch_all($resultat_numerique, MYSQLI_ASSOC);

// Récupération des scores de la table compétence
$requete_competence = "SELECT score FROM competence WHERE identreprise='$id'";
$resultat_competence = mysqli_query($conn, $requete_competence);
$scores_competence = mysqli_fetch_all($resultat_competence, MYSQLI_ASSOC);

// Transformation des scores en pourcentages sur 5
$max_score = 5;
$score_reactivite = round(array_sum(array_column($scores_reactivite, 'score')) / count($scores_reactivite) * $max_score);
$score_numerique = round(array_sum(array_column($scores_numerique, 'score')) / count($scores_numerique) * $max_score);
$score_competence = round(array_sum(array_column($scores_competence, 'score')) / count($scores_competence) * $max_score);

// Affichage du graphique radar
echo "<canvas id='radarChart'></canvas>";
echo "<script src='https://cdn.jsdelivr.net/npm/chart.js'></script>";
echo "<script>
        var radarChart = new Chart(document.getElementById('radarChart'), {
            type: 'radar',
            data: {
                labels: ['Réactivité', 'Numérique', 'Compétence'],
                datasets: [{
                    label: 'Score',
                    data: [$score_reactivite, $score_numerique, $score_competence],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scale: {
                    ticks: {
                        beginAtZero: true,
                        max: 3
                    }
                }
            }
        });
      </script>";
?>

  


  </body>
</html>
