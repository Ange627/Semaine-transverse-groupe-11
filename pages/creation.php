<?php require "header.php";
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
			$idlibelle = mysqli_real_escape_string($conn,$_POST['id_libelle'.$i]);
            $requete = "INSERT INTO competence (identreprise, idquestionnement , score , iditem ) VALUES ('$id_entreprise', '$id_question', '$score' ,'$idlibelle')";
            $resultat = $conn->query($requete);
        }

        // Insertion des scores numériques dans la table numerique
        for($i = 1; $i <= 20; $i++) {
            $id_question = mysqli_real_escape_string($conn, $_POST['id_question_'.$i]);
            $score = mysqli_real_escape_string($conn, $_POST['score_question_'.$i]);
			$idlibelle = mysqli_real_escape_string($conn,$_POST['id_libelle'.$i]);
            $requete = "INSERT INTO numerique (identreprise, idquestionnement, score ,iditem) VALUES ('$id_entreprise', '$id_question', '$score','$idlibelle')";
            $resultat = $conn->query($requete);
        }

        // Insertion des scores de réactivité dans la table reactivite
        for($i = 1; $i <= 11; $i++) {
            $id_question = mysqli_real_escape_string($conn, $_POST['id_question_'.$i]);
            $score = mysqli_real_escape_string($conn, $_POST['score_question_'.$i]);
			$idlibelle = mysqli_real_escape_string($conn,$_POST['id_libelle'.$i]);
            $requete = "INSERT INTO reactivite (identreprise, idquestionnement, score,iditem) VALUES ('$id_entreprise', '$id_question', '$score','$idlibelle')";
            $resultat = $conn->query($requete);
        }
    }

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
	<nav>
		<a href="../index.php">accueil</a>
	</nav>
	<h1>Formulaire</h1>
	<form method="POST" action="">
		<h2>Entreprise</h2>
		<label for="nom_entreprise">Nom de l'entreprise :</label>
		<input type="text" id="nom_entreprise" name="nom_entreprise"><br><br>

		<h2>Compétence</h2>
		<?php
			// Récupération des questions de la table questionnement_competence
			$requete = "SELECT questionnement_competence.id as id , competence_item.id as iditem , question , libelle from questionnement_competence
			INNER JOIN competence_item on questionnement_competence.id_item = competence_item.id;";
			$resultat = $conn->query($requete);
			if ($resultat->num_rows > 0) {
				$i = 1;
				while ($row = $resultat->fetch_assoc()) {
					echo '<p>Question ' . $i . ' : ' . $row["question"] . '</p>';
					echo '<p>libelle ' . $i . ' : ' . $row["libelle"] . '</p>';
					echo '<input type="hidden" name="id_question_' . $i . '" value="' . $row["id"] . '">';
					echo '<input type="hidden" name="id_libelle' . $i . '" value="' . $row["iditem"] . '">';
					echo '<input type="number" min="0" max="2" name="score_question_' . $i . '">/2<br><br>';
					$i++;
				}
			}
		?>

		<h2>Numérique</h2>
		<?php
			// Récupération des questions de la table questionnement_numerique
			$requete = "SELECT questionnement_numerique.id as id , numerique_item.id as iditem , question , libelle from questionnement_numerique
			INNER JOIN numerique_item on questionnement_numerique.id_item = numerique_item.id;";
			$resultat = $conn->query($requete);
			if ($resultat->num_rows > 0) {
				$i = 1;
				while ($row = $resultat->fetch_assoc()) {
					echo '<p>Question ' . $i . ' : ' . $row["question"] . '</p>';
					echo '<input type="hidden" name="id_question_' . $i . '" value="' . $row["id"] . '">';
					echo '<input type="hidden" name="id_libelle' . $i . '" value="' . $row["iditem"] . '">';
					echo '<input type="number" min="0" max="2" name="score_question_' . $i . '">/2<br><br>';
					$i++;
				}
			}
		?>

		<h2>Réactivité</h2>
		<?php
			// Récupération des questions de la table questionnement_reactivite
			$requete = "SELECT questionnement_reactivite.id as id , reactivite_item.id as iditem , question , libelle from questionnement_reactivite
			INNER JOIN reactivite_item on questionnement_reactivite.id_item = reactivite_item.id;";
			$resultat = $conn->query($requete);
			if ($resultat->num_rows > 0) {
				$i = 1;
				while ($row = $resultat->fetch_assoc()) {
					echo '<p>Question ' . $i . ' : ' . $row["question"] . '</p>';
					echo '<input type="hidden" name="id_question_' . $i . '" value="' . $row["id"] . '">';
					echo '<input type="number" min="0" max="2" name="score_question_' . $i . '">/2<br><br>';
					$i++;
				}
			}
		?>

		<input type="submit" name="submit" value="Valider">
	</form>
</body>


</html>