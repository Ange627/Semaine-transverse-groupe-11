<?php require "header.php";

// Requête SQL pour sélectionner toutes les données de la table
$sql = "SELECT score,libelle,question FROM competence 
inner join competence_item on competence.iditem = competence_item.id
INNER JOIN questionnement_competence on competence.id = questionnement_competence.id;";
$result = $conn->query($sql);

// Vérifier si des données ont été trouvées
if ($result->num_rows > 0) {

    // Afficher les données dans un tableau HTML
    echo "<table>";
    echo "        <thead>
    <tr>
        <th>Excellence technique / communauté pratique</th>
    </tr>
</thead>";

    // Boucle pour afficher chaque ligne de données
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["libelle"]."</td><td>".$row["question"]."</td><td>".$row["libelle"]."</td><td>".$row["score"]."</td></tr>";
    }

    echo "</table>";

} else {
    echo "0 résultats";
}

// Fermer la connexion à la base de données
$conn->close();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Axe compétence</title>
    <link href="../style/style.css" rel="stylesheet">
  </head>
  <body>
    <a href="../index.html">Home</a>
    <a href="competence.php">competence</a>
    <a href="numérique.php">numérique</a>
    <br>
    <h1>Axe réactivité</h1>

    <table>
        <thead>
            <tr>
                <th colspan="2">Vélocité de réponse</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Questionnement</td>
                <td>Score</td>
            </tr>
            <tr>
                <td>Valeur supérieure utilisable livrée plus tôt (Fonction principale utilisable dès les premières versions)</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Réactivité face aux impératifs prépondérants</td>
                <td>2</td>
            </tr><tr>
                <td>Mesure de la vélocité de l'équipe (indicateur de suivi du travail d'une équipe de conception)</td>
                <td>1</td>
            </tr>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan="2">Environnement souples</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Questionnement</td>
                <td>Score</td>
            </tr>
            <tr>
                <td>Les installations techniques et de gestion sont modernes (TIC/ERP/CRM)</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Les équipes sont en capacité d'autonomiser une partie de leurs tâches</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Les équipes s'inscrivent dans un cadres Agile Lean</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Les mécanismes de livraison et de synchronication sont mature</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan="2">Défi environnemental</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Questionnement</td>
                <td>Score</td>
            </tr>
            <tr>
                <td>Les innovations produit tiennent compte de l'urgence climatique</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Les processus internes sont remis en cause pour diminuer leur impact environnemental</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Les parties prenantes sont sélectionnées en fonction de leur éthique vis-à-vis du développement durable</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan="2">Veille et benchmark</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Questionnement</td>
                <td>Score</td>
            </tr>
            <tr>
                <td>Veille stratégique</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
  </body>
</html>
