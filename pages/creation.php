<html>
<head>
	<title>Formulaire de compétences</title>
    <meta charset="utf-8">
    <title>Diagnostic entreprise hypromat</title>
    <link href="../style/style.css" rel="stylesheet">
</head>
<body>
    <nav>
        <a href="/Semaine-transverse-groupe-11/index.php">accueil</a>
    </nav>
	<h1>Formulaire de compétences</h1>
	
	<form method="post" action="submit.php">
		
		<!-- Partie entreprise -->
		<label for="nom_entreprise">Nom de l'entreprise :</label>
		<input type="text" id="nom_entreprise" name="nom_entreprise" required><br><br>
		
		<!-- Partie compétences -->
		<h2>Compétences</h2>
		<?php
			// Connexion à la base de données
			$connexion = new PDO('mysql:host=localhost;dbname=bdd-diagnostic', 'root', '');
			
			// Requête pour récupérer les différentes parties de compétences
			$requete_parties = $connexion->query("SELECT * FROM competence_item");
			
			// Boucle sur les parties de compétences
			while($partie = $requete_parties->fetch(PDO::FETCH_ASSOC)) {
				echo '<h3>' . $partie['libelle'] . '</h3>';
                
				// Requête pour récupérer les questions de la partie de compétence en cours
				$requete_questions = $connexion->prepare("SELECT id FROM questionnement_competence WHERE id_item = 1");
				$requete_questions->execute(array($partie['id']));
                $questions = $requete_questions->fetchAll(PDO::FETCH_ASSOC);

				
				// Boucle sur les questions
				while($question = $requete_questions->fetch(PDO::FETCH_ASSOC)) {
					echo '<label for="question_' . $question['id'] . '">' . $question['question'] . '</label>';
					echo '<input type="text" id="question_' . $question['id'] . '" name="question_' . $question['id'] . '"><br>';
				}
				
				echo '<br>';
			}
			
			// Fermeture de la connexion à la base de données
			$connexion = null;
		?>
		
		<!-- Bouton de soumission -->
		<br>
		<input type="submit" value="Valider">
	
	</form>
</body>
</html>
