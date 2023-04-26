
<?php

    // Connexion à la base de données
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'bdd-diagnostic';

    $conn = new mysqli($host, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "0azdaz résultats";
    }

?>