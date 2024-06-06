<?php 
session_start();
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
                    <form action="Traitement/trait_login.php" method="post">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">
                            <h2>Se connecter avec</h2>
                            </p>
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating ms-3 me-1" style="background-color: rgba(59, 113, 202, 1);">
                                <i class="bi bi-facebook"></i>
                            </button>

                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1" style="background-color: rgba(59, 113, 202, 1);">
                                <i class="bi bi-google"></i>
                            </button>

                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1" style="background-color: rgba(59, 113, 202, 1);">
                                <i class="bi bi-twitter-x"></i>
                            </button>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0" style="font-size: 20px;">Ou</p>
                        </div>

                        <?php
                        if (isset($_SESSION['message'])) {
                            ?>
                            <div class="alert alert-warning d-flex align-items-center" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <div>
                                    <?php
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                    ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form3Example3" style="font-size: 22px;">Adresse e-mail</label>
                            <input type="email" id="form3Example3" name="email" class="form-control form-control-lg" placeholder="" />
                            <div id="emailHelp" class="form-text fs-5">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-3">
                            <label class="form-label" for="form3Example4" style="font-size: 22px;">Mot de passe</label>
                            <input type="password" id="form3Example4" name="mdp" class="form-control form-control-lg" placeholder="" />
                            <div id="emailHelp" class="form-text fs-5 mb-4">Nous ne partagerons jamais votre mot de passe avec qui que ce soit</div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" name="remmber" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="Recuperation1.php" class="text-body text-decoration-none fs-5">Mot de passe oublié?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg xb-5" style="padding-left: 2.5rem; padding-right: 2.5rem;background-color: rgba(59, 113, 202, 1);">Se connecter</button>
                            <p class="fw-bold mt-2 pt-1" style="text-align: right;font-size: 20px;">Vous n'avez pas de compte ? <a href="Inscription.php" class="link-danger">S'inscrire</a></p>
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