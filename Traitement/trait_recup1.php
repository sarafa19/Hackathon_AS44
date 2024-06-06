<?php 
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;port=3307;dbname=annuaire', 'root', '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->prepare("SELECT Email FROM compte WHERE Email= ?");
$reponse->execute(array($_POST['email']));
$req = $reponse->fetch();

if (empty($req)) {
    $_SESSION['sms_recup1'] = 'Aucun compte enregistré avec cet email !';
    header('location:../Recuperation1.php');
    exit;
} else {
    $_SESSION['email_recup'] = $_POST['email'];
    $_SESSION['retour'] = true;
    header('location:../Recuperation2.php');
    exit;
}
?>