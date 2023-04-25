
<?php
    $servername = "localhost"; // le nom du serveur de base de données
    $username = "root"; // le nom d'utilisateur pour se connecter à la base de données
    $password = ""; // le mot de passe pour se connecter à la base de données
    $dbname = "bdd-diagnostic"; // le nom de la base de données à laquelle se connecter

    // création de la connexion
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // vérification de la connexion
    if (!$conn) {
        die("La connexion a échoué : " . mysqli_connect_error());
    }

    echo "Connexion réussie";
?>