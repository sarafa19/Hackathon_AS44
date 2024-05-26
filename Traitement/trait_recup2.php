<?php
session_start();

$_SESSION['retour'] = true;

//Ouverture de la base de donnée
try {
    $bdd = new PDO('mysql:host=localhost;port=3307;dbname=annuaire', 'root', '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

//Verification du code
if ($_POST['code'] != $_SESSION['code_recup']) {
    $_SESSION['sms_recup2']="Code incorrect !";
    $_SESSION['retour'] = false;
    header('location:../Recuperation2.php');
    exit;
}else{
    header('location:../Recuperation3.php');
    exit;
}

?>