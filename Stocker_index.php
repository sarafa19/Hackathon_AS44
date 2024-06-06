<?php
session_start();

// Vérification de l'existence de 'index' dans POST
if (!isset($_POST['index'])) {
    die('Erreur : Index non défini.');
}

// Stockage de 'index' dans la session PHP
$_SESSION['index'] = $_POST['index'];

// Réponse à la requête AJAX
http_response_code(200);
?>
