<?php
session_start(); // Démarrez la session si ce n'est pas déjà fait

// Détruisez toutes les variables de session
$_SESSION = array();

// Détruisez la session
session_destroy();

// Redirigez l'utilisateur vers la page de connexion ou une autre page appropriée
header("location: Acceuil.php"); // Remplacez "login.php" par le chemin de la page de connexion
exit;
?>
