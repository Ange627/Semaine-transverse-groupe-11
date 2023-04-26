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
    <a href="numérique.php">numérique</a>
    <a href="réactivité.php">réactivité</a>
    <br>
    <h1>Axe compétence</h1>
    <table>
        <thead>
            <tr>
                <th colspan="2">Excellence technique / communauté pratique</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Questionnement</td>
                <td>Score</td>
            </tr>
            <tr>
                <td>Formation pour apprendre à apprendre</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Co developpement existant</td>
                <td>1</td>
            </tr><tr>
                <td>les collaborateurs sont amenées à partager leurs compétence</td>
                <td>1</td>
            </tr><tr>
                <td>Mentoring existant pour le transfert de compétence</td>
                <td>1</td>
            </tr><tr>
                <td>Les managers sont aussi des formateurs sur certains sujets pour l'entreprise</td>
                <td>1</td>
            </tr><tr>
                <td>L'entreprise favorise l'excellence technique</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan="2">Faire agile</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Questionnement</td>
                <td>Score</td>
            </tr>
            <tr>
                <td>Utilisation de la méthode agile sur des projets</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Promotion de l'état d'esprit agile</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan="2">Gestion humaine des compétences</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Questionnement</td>
                <td>Score</td>
            </tr>
            <tr>
                <td>bonne gestion humaine des compétences</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>
    
  </body>
</html>
