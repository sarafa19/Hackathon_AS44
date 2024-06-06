<?php 
session_start();

try {
    $bdd = new PDO(
        'mysql:host=localhost;port=3307;dbname=annuaire',
        'root',
        '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

$nomEnMajuscule = strtoupper($_POST['Nom']);
$prenomEnMajuscule = strtoupper($_POST['Prenoms']);

// Concaténer les valeurs avec un espace entre elles
$somme = $nomEnMajuscule . " " . $prenomEnMajuscule;
$Code1 = "AS" . $_POST['Promo']; 
$Code2 = "AS" . $_POST['Promo']; 

$reponse = $bdd->prepare("SELECT*FROM liste WHERE Nom=? AND (Code_Promo=? OR Code_Promo=?) ");
$reponse->execute(array($somme, $Code1,$Code2));
$req = $reponse->fetch();
if (empty($req)) {
    $_SESSION["sms_auth"] = 'Informations incorrectes';
    //On repart sur la page connexion
    header('location:../Inscription.php');
    exit;
} else {
    unset($_SESSION['sms_auth']);
    $_SESSION['disabled1'] = true;
    $_SESSION['numero_user'] = $req['Numero'];
    header('location:../Inscription.php');
    exit;
}
?>