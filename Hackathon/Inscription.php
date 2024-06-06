<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="jquery-jquery-f79d5f1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Inscription</title>
    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }

        body {
            background-color: #8fc4b7;
        }
    </style>
</head>

<body>
    <div class="h-100 h-custom" style="background-color: #8fc4b7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <img src="Images/fond.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Informations d'inscription</h3>
                            <p>Afin de vous s'inscrire en tant que AS, veillez remplir les informations suivantes pour vous
                                authentifier.
                            </p>
                            
                            <?php
                            if (isset($_SESSION['sms_auth'])) {
                            ?>
                                <div class="alert alert-success mb-5" role="alert">
                                    <h4 class="alert-heading fs-5">AS non reconnu !</h4>
                                    <p>Veillez vérifier vos informations. Aucun AS enregistré dans l'annuaire ayant ces informations.</p>
                                    <hr>
                                    <p class="mb-0">Si le problème persiste, <a href="mailto:2alsy-france@gmail.com">contacter-nous</a> pour plus d'informations.</p>
                                </div>
                            <?php
                                unset($_SESSION['sms_auth']);
                            }
                            if (isset($_SESSION['disabled1'])) {
                            ?>
                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    <div>
                                        Authentification reussie cher AS. Passez aux informations finales.
                                    </div>
                                </div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        // Select the form
                                        const form = document.getElementById('myForm1');
                                        // Get all input, select, and textarea elements within the form
                                        const elements = form.querySelectorAll('input, select, textarea, button');
                                        // Disable each element
                                        elements.forEach(element => {
                                            element.disabled = true;
                                        });
                                    });

                                    document.addEventListener("DOMContentLoaded", function() {
                                        // Select the fieldset
                                        const fieldset = document.getElementById('myForm2');
                                        // Enable the fieldset by removing the disabled attribute
                                        fieldset.removeAttribute('disabled');
                                        // Get all input, select, textarea, and button elements within the fieldset
                                        const elements = fieldset.querySelectorAll('input, select, textarea, button');
                                        // Enable each element
                                        elements.forEach(element => {
                                            element.disabled = false;
                                        });
                                    });
                                </script>
                            <?php
                            };
                            ?>

                            <form id="myForm1" class="row g-3" method="post" action="Traitement/trait_inscrip1.php">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="Nom" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Prénoms</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="Prenoms" required>
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Pays de résidence</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="Pays" placeholder="France">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Téléphone</label>
                                    <input type="tel" class="form-control" id="inputCity" name="Tel">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Promotion (AS)</label>
                                    <input type="number" min="1" class="form-control" id="inputState" name="Promo" required>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck" name="Check">
                                        <label class="form-check-label" for="gridCheck">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success mb-3">Confirmer l'identité</button>
                                </div>
                            </form>



                            <form class="row g-3" method="post" action="Traitement/trait_inscrip2.php">
                                <fieldset id="myForm2" disabled>
                                    <legend class="text-center my-2">Informations finales</legend>
                                    <?php
                                    if (isset($_SESSION['sms_inscrip'])) {
                                    ?>
                                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                            <div>
                                                <?php
                                                echo $_SESSION['sms_inscrip'];
                                                unset($_SESSION['sms_inscrip']);
                                                ?>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="Email" required>
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="Mdp" required>
                                        <label for="floatingPassword">Password</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="Confirm_mdp" required>
                                        <label for="floatingPassword">Confirm password</label>
                                    </div>

                                    <select class="form-select mb-3" aria-label="Default select example" aria-placeholder="Status" name="Status" required>
                                        <option value="AS Simple">AS Simple</option>
                                        <option value="AS Investisseur">AS Investisseur</option>
                                        <option value="AS Membre du bureau">AS Membre du bureau</option>
                                    </select>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingPassword" placeholder="Metier" name="Job" max="100" required>
                                        <label for="floatingPassword">Metier</label>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck" name="Newletters">
                                            <label class="form-check-label" for="gridCheck">
                                                Sign newsletters
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">S'inscrire</button>
                                        <button type="button" class="btn btn-secondary" id="resetButton">Réinitialiser</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const resetButton = document.getElementById('resetButton');
            // Ajoutez un écouteur d'événements au clic sur le bouton de réinitialisation
            resetButton.addEventListener('click', function() {
                // Select the form
                const form = document.getElementById('myForm1');
                // Get all input, select, and textarea elements within the form
                const elements = form.querySelectorAll('input, select, textarea, button');
                // Enable each element
                elements.forEach(element => {
                    element.disabled = false;
                });
                
                // Sélectionnez le deuxième formulaire
                const form2 = document.getElementById('myForm2');
                // Obtenez tous les éléments input, select et textarea dans le deuxième formulaire
                const elements2 = form2.querySelectorAll('input, select, textarea, button');
                // Désactivez chaque élément du deuxième formulaire
                elements2.forEach(element => {
                    element.disabled = true;
                });

                // Supprimez la div avec la classe "alert alert-success"
                const successAlert = document.querySelector('.alert.alert-success');
                if (successAlert) {
                    successAlert.remove();
                }
                
            });
        });
</script>

</body>

</html>