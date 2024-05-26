<?php
    session_start();
    ob_start();
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
    $reponse = $bdd->prepare("SELECT*FROM compte WHERE Email=? AND Mot_de_passe=? ");
    $reponse->execute(array($_POST["email"], sha1($_POST["mdp"])));
    $req = $reponse->fetch();
    if (empty($req)) {
        $_SESSION["message"] = 'Mot de passe ou email incorrect !';
        //On repart sur la page connexion
        header('location:../Login.php');
        exit;
    } else {
        unset($_SESSION['message']);
        $_SESSION['user_mail'] = $req['Email'];
        $_SESSION['user_mdp'] = $req['Mot_de_passe'];
        $_SESSION['user_numero'] = $req['Numero'];
        header('location:../Acceuil_AS_simple.php');
        exit;
    }
    ob_end_flush();
?>