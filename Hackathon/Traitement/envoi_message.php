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

$req = $bdd->prepare('INSERT INTO messages (Id_message, Contenu, Date_message, Numero_exp, Numero_recep)  
    VALUES(:i, :cn, NOW(), :exp, :recep)');
$req->execute(array(
    'i' => '',
    'cn' => htmlspecialchars($_POST['sms'], ENT_QUOTES, 'UTF-8'),
    'exp' => $_SESSION['user_numero'],
    'recep' => $_SESSION['tableau'][$_SESSION['index']]
));
header('location:../Discuter.php');
exit;

?>