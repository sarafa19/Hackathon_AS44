<?php
session_start();

$code_verif = rand(10000, 99999);
$_SESSION['code_recup'] = $code_verif;

$destinataire = $_SESSION['email_recup'];
$sujet = "Récuperation mot de passe";
$message = "<html><body>";
$message .= "<h1>Code de récuparation</h1>";
$message .= "<p>Votre code est: " . $code_verif . " . Utilisez le pour réinitialiser votre mot de passe et vous connecter.</p>";
$message .= "<p>Si vous n'en avez pas fait la demande, ignorez simplement ce message.</p>";
$message .= "<p>Cordialement,<br> L'equipe 2ASLY-FRANCE<br> Les Ainés au service des Cadets.</p>";
$message .= "</body></html>";

// En-têtes de l'e-mail
$headers = "From: kouehijoel05@gmail.com\r\n";
$headers .= "Reply-To: kouehijoel05@gmail.com\r\n";
$headers .= "Content-Type: text/html; charset=\"utf-8\"\r\n";

if ($_SESSION['retour']) {
    // Envoi de l'e-mail
    if (mail($destinataire, $sujet, $message, $headers)) {

    } else {
        
    }  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery-jquery-f79d5f1/dist/jquery.min.js"></script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5 d-flex justify-content-center" style="border: 1px solid black;">
                    <div>
                        <img src="Images/Capture_d’écran.png" class="img-fluid" alt="Sample image">
                        <div style="background-color: aqua;">
                            <h2 class="text-center">LA 2ALSY-FRANCE</h2>
                            <h3 class="text-center">Les Ainés au service des cadets</h3>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="Traitement/trait_recup2.php" method="post">

                        <div class="position-relative m-4 mb-5">
                            <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                            <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-info rounded-pill" style="width: 2rem; height:2rem;">1</button>
                            <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-info rounded-pill" style="width: 2rem; height:2rem;">2</button>
                            <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
                        </div>

                        <h2 class="text-center my-5">Vous avez reçu un code via votre email, veillez l'entrer ci-dessous</h2>


                        <?php
                        if (isset($_SESSION['sms_recup2'])) {
                        ?>
                            <div class="alert alert-warning d-flex align-items-center" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <div>
                                    <?php
                                    echo $_SESSION['sms_recup2'];
                                    unset($_SESSION['sms_recup2']);
                                    ?>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form3Example3" style="font-size: 22px;">Code de récuperation :</label>
                            <input type="text" id="form3Example3" name="code" class="form-control form-control-lg" placeholder="" />
                            <div id="emailHelp" class="form-text fs-5">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg xb-5" style="padding-left: 2.5rem; padding-right: 2.5rem;background-color: rgba(59, 113, 202, 1);">Soumettre</button>
                            </div>
                            <div class="text-center text-lg-start mt-4 pt-2">
                                <p class="fw-bold mt-2 pt-1" style="text-align: right;font-size: 20px;">Vous n'avez pas de compte ? <a href="Inscription.php" class="link-danger">S'inscrire</a></p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <footer class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5" style="background-color: rgba(59, 113, 202, 1);">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2024. All rights reserved.
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <div>

                <a href="https://web.facebook.com/2alsy?locale=fr_FR" class="text-white me-4 text-decoration-none">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://x.com/A2alsy?t=uTOJJbUIe3-o932txPK_cQ&s=08" class="text-white me-4 text-decoration-none">
                    <i class="bi bi-twitter-x"></i>
                </a>
                <a href="https://www.instagram.com/2alsy?igsh=MWptOGh1bjA0Z3Bhaw==" class="text-white me-4 text-decoration-none">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/2alsy/" class="text-white text-decoration-none">
                    <i class="bi bi-linkedin"></i>
                </a>
            </div>
            <!-- Right -->
        </footer>
    </section>
</body>

</html>