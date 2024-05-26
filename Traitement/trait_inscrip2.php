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

$reponse = $bdd->prepare("SELECT*FROM compte WHERE Numero=? ");
$reponse->execute(array($_SESSION["numero_user"]));
$req2 = $reponse->fetch();
if (!empty($req2)) {
    $_SESSION['sms_inscrip'] = 'Vous avez déjà un compte.';
    header('location:../Inscription.php');
    exit;
}

if (!preg_match("/^[a-zA-Z\s\-]+$/", $_POST['Job'])) {
    $_SESSION['sms_inscrip'] = "Le champ 'métier' ne peut contenir que des lettres, des espaces et des tirets.";
    header('location:../Inscription.php');
    exit;
}


if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['Email'])) {
    $_SESSION['sms_inscrip'] = 'Email incorrect !';
    header('location:../Inscription.php');
    exit;

}if ($_POST['Mdp']!=$_POST['Confirm_mdp']) {
    $_SESSION['sms_inscrip'] = 'Mot de passe non identique !';
    header('location:../Inscription.php');
    exit;
}

$req = $bdd->prepare("INSERT INTO compte(Email,Mot_de_passe,Numero,Statut,Emploi) VALUES(:mail, :mdp, :num, :stat, :job)");
$req->execute(array(
    'mail' => htmlspecialchars($_POST['Email'], ENT_QUOTES, 'UTF-8'),
    'mdp' => sha1($_POST['Mdp']),
    'num' => $_SESSION['numero_user'],
    'stat' => htmlspecialchars($_POST['Statuts']),
    'job' => htmlspecialchars(trim($_POST['Job']), ENT_QUOTES, 'UTF-8')
));
unset($_SESSION['disabled1']);
header('location:../Login.php');
exit;

?>