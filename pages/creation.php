<?php require "header.php";

?>
  
<!DOCTYPE html>
<html>
<head>
<title>Formulaire de compétences</title>
    <meta charset="utf-8">
    <title>Diagnostic entreprise hypromat</title>
    <link href="../style/style.css" rel="stylesheet">
</head>
<body>
	<h1>Formulaire</h1>
	<form method="POST" action="">
		<h2>Entreprise</h2>
		<label for="nom_entreprise">Nom de l'entreprise :</label>
		<input type="text" id="nom_entreprise" name="nom_entreprise"><br><br>

		<h2>Compétence</h2>
		<?php
			// Récupération des questions de la table questionnement_competence
			$requete = "SELECT * FROM questionnement_competence";
			$resultat = $conn->query($requete);
			if ($resultat->num_rows > 0) {
				$i = 1;
				while ($row = $resultat->fetch_assoc()) {
					echo '<p>Question ' . $i . ' : ' . $row["question"] . '</p>';
					echo '<input type="hidden" name="id_question_' . $i . '" value="' . $row["id"] . '">';
					echo '<input type="number" min="0" max="10" name="score_question_' . $i . '">/10<br><br>';
					$i++;
				}
			}
		?>

		<h2>Numérique</h2>
		<?php
			// Récupération des questions de la table questionnement_numerique
			$requete = "SELECT * FROM questionnement_numerique";
			$resultat = $conn->query($requete);
			if ($resultat->num_rows > 0) {
				$i = 1;
				while ($row = $resultat->fetch_assoc()) {
					echo '<p>Question ' . $i . ' : ' . $row["question"] . '</p>';
					echo '<input type="hidden" name="id_question_' . $i . '" value="' . $row["id"] . '">';
					echo '<input type="number" min="0" max="10" name="score_question_' . $i . '">/10<br><br>';
					$i++;
				}
			}
		?>

		<h2>Réactivité</h2>
		<?php
			// Récupération des questions de la table questionnement_reactivite
			$requete = "SELECT * FROM questionnement_reactivite";
			$resultat = $conn->query($requete);
			if ($resultat->num_rows > 0) {
				$i = 1;
				while ($row = $resultat->fetch_assoc()) {
					echo '<p>Question ' . $i . ' : ' . $row["question"] . '</p>';
					echo '<input type="hidden" name="id_question_' . $i . '" value="' . $row["id"] . '">';
					echo '<input type="number" min="0" max="10" name="score_question_' . $i . '">/10<br><br>';
					$i++;
				}
			}
		?>

		<input type="submit" name="submit" value="Valider">
	</form>
</body>


</html>


<?php 
    
    if(isset($_POST['submit'])) {
        // Récupération des données du formulaire
        $nom_entreprise = mysqli_real_escape_string($conn, $_POST['nom_entreprise']);

        // Insertion des données dans la table entreprise
        $requete = "INSERT INTO entreprise (nom) VALUES ('$nom_entreprise')";
        $resultat = $conn->query($requete);

        // Récupération de l'ID de l'entreprise insérée
        $id_entreprise = mysqli_insert_id($conn);

        // Insertion des scores de compétence dans la table competence
        for($i = 1; $i <= 9; $i++) {
            $id_question = mysqli_real_escape_string($conn, $_POST['id_question_'.$i]);
            $score = mysqli_real_escape_string($conn, $_POST['score_question_'.$i]);
            $requete = "INSERT INTO competence (identreprise, idquestionnement , score) VALUES ('$id_entreprise', '$id_question', '$score')";
            $resultat = $conn->query($requete);
        }

        // Insertion des scores numériques dans la table numerique
        for($i = 1; $i <= 20; $i++) {
            $id_question = mysqli_real_escape_string($conn, $_POST['id_question_'.$i]);
            $score = mysqli_real_escape_string($conn, $_POST['score_question_'.$i]);
            $requete = "INSERT INTO numerique (identreprise, idquestionnement, score) VALUES ('$id_entreprise', '$id_question', '$score')";
            $resultat = $conn->query($requete);
        }

        // Insertion des scores de réactivité dans la table reactivite
        for($i = 1; $i <= 11; $i++) {
            $id_question = mysqli_real_escape_string($conn, $_POST['id_question_'.$i]);
            $score = mysqli_real_escape_string($conn, $_POST['score_question_'.$i]);
            $requete = "INSERT INTO reactivite (identreprise, idquestionnement, score) VALUES ('$id_entreprise', '$id_question', '$score')";
            $resultat = $conn->query($requete);
        }
    }
?>