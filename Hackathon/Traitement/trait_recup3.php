<?php
session_start();


//Ouverture de la base de donnée
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

//Verification mdp
if ($_POST['mdp'] != $_POST['confirm_mdp']) {
    $_SESSION['sms_recup3'] = "Mot de passe non identique !";
    header('location:../Recuperation3.php');
    exit;
} else {
    //Mise à jour de la base de donnée
    $req = $bdd->prepare("UPDATE compte SET Mot_de_passe = :mdp WHERE Email = :mail");
    $req->execute(array(
        'mdp' => sha1($_POST['mdp']),
        'mail' => $_SESSION['email_recup']
    ));
?>
    <script>
        alert("Votre mot de passe a été modifié effectivement. Rendez-vous sur la page de connexion.");
        window.location.href = "../Login.php";
    </script>
<?php
}
?>