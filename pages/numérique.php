<?php require "header.php";

// Requête SQL pour sélectionner toutes les données de la table
$sql = "SELECT score,libelle,question FROM numerique 
inner join numerique_item on numerique.iditem = numerique_item.id
INNER JOIN questionnement_numerique on numerique.id = questionnement_numerique.id;";
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
    <a href="réactivité.php">réactivité</a>
    <br>
    <h1>Axe numérique</h1>
    <table>
        <thead>
            <tr>
                <th colspan="2">Business model</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Questionnement</td>
                <td>Score</td>
            </tr>
            <tr>
                <td>Votre entreprise dégage t-elle une part de CA  par des produits ou services en ligne</td>
                <td>0</td>
            </tr>
            <tr>
                <td>La mise en place d'outils numériques a-t-elle permis d'optimiser les coûts, les délais et la qualité ?</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Comment les outils sont-ils intégrés dans les process de l’entreprise ?</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Comment partagez-vous les données numériques avec les parties prenantes (clients, fournisseurs,…) ?</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Mesurez-vous les impacts du numérique sur votre entreprise ?</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Quel est l’impact du numérique sur la démarche RSE de l’entreprise ?</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Existe-t-il des freins (stratégiques, financiers,…) à l’ investissement dans les outils numériques ?</td>
                <td>2</td>
            </tr>

        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan="2">Relation client</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Questionnement</td>
                <td>Score</td>
            </tr>
            <tr>
                <td>L’entreprise dispose-t-elle : d’un site internet, d’un compte LinkedIn, d’une page Facebook, d’un compte Twitter,... ?</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Comment utilisez-vous le numérique dans la relation client ? (nouveau modèle de vente, nouveau modèle d’échanges avec les clients, communauté, story, chat,...)</td>
                <td>1</td>
            </tr>
            <tr>
                <td>L’entreprise dispose-t-elle d’un community manager ?</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Certains de vos collaborateurs sont-ils actifs sur les réseaux sociaux au nom de l’entreprise ?</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Comment mesurez-vous et exploitez-vous les données issues du site de votre entreprise ?</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Avez-vous observé chez vos concurrents des pratiques innovantes ?</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan="2">Management</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Questionnement</td>
                <td>Score</td>
            </tr>
            <tr>
                <td>Vos collaborateurs sont-ils équipés de nouveaux équipements numériques de travail (PC portable, tablette, smartphone,…) ? </td>
                <td>2</td>
            </tr>
            <tr>
                <td>L’arrivée des outils digitaux a-t-elle eu un impact sur les pratiques et la culture de l’entreprise ?</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Comment vous êtes-vous approprié et comment avez-vous accompagné ces évolutions?</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Les nouvelles possibilités technologiques ont-elles fait évoluer le modèle d’organisation de l’entreprise et/ou votre management, vers plus de collaboration avec des acteurs internes ou externes ?</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Mobilisez-vous des outils de veille et mettez-vous en œuvre des modalités de curation et de partage de l’ information ?</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Les fonctionnalités des outils sont-elles augmentées par la pratique de vos collaborateurs ?</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Comment accompagnez-vous vos collaborateurs dans la transition numérique ?</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>    
  </body>
</html>
