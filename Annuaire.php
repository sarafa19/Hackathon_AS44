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
$reponse = $bdd->prepare("SELECT*FROM liste WHERE Pays = ?");
$reponse->execute(array("France"));



// Construction de la requête SQL de base
$sql = "SELECT * FROM liste";

// Construction de la clause WHERE en fonction des critères sélectionnés dans le formulaire
$where_conditions = array();

if (!empty($_POST['choices-single-categories'])) {
    $section = $_POST['choices-single-categories'];
    $where_conditions[] = "Pays = :section";
}else{
    $where_conditions[] = "Pays = 'France'";
}

if (!empty($_POST['NP'])) {
    $nom = $_POST['NP'];
    $where_conditions[] = "Nom = :nom";
}

if (!empty($_POST['PY'])) {
    $pays = $_POST['PY'];
    $where_conditions[] = "Pays = :pays";
}

if (!empty($_POST['TL'])) {
    $telephone = $_POST['TL'];
    $where_conditions[] = "Telephone = :telephone";
}

if (!empty($_POST['P'])) {
    $code_promo = $_POST['P'];
    $where_conditions[] = "Code_Promo = :code_promo";
}

// Ajout de la clause WHERE pour la recherche par valeur de recherche
if (!empty($_POST['valeur_recherche'])) {
    $valeur_recherche = '%' . $_POST['valeur_recherche'] . '%'; // Ajoutez des jokers % pour la recherche partielle
    $where_conditions[] = "(Nom LIKE :valeur_recherche OR Pays LIKE :valeur_recherche OR Telephone LIKE :valeur_recherche OR Code_Promo LIKE :valeur_recherche)";
}

// Ajout de la clause WHERE à la requête SQL si des critères ont été sélectionnés
if (!empty($where_conditions)) {
    $sql .= " WHERE " . implode(" AND ", $where_conditions);
}

// Préparation de la requête SQL
$stmt = $bdd->prepare($sql);

// Liaison des valeurs avec les paramètres liés
if (!empty($_POST['choices-single-categories'])) {
    $stmt->bindParam(':section', $_POST['choices-single-categories'], PDO::PARAM_STR);
}
if (!empty($_POST['NP'])) {
    $stmt->bindParam(':nom', $_POST['NP'], PDO::PARAM_STR);
}
if (!empty($_POST['PY'])) {
    $stmt->bindParam(':pays', $_POST['PY'], PDO::PARAM_STR);
}
if (!empty($_POST['TL'])) {
    $stmt->bindParam(':telephone', $_POST['TL'], PDO::PARAM_STR);
}
if (!empty($_POST['P'])) {
    $stmt->bindParam(':code_promo', $_POST['P'], PDO::PARAM_STR);
}
if (!empty($_POST['valeur_recherche'])) {
    $stmt->bindParam(':valeur_recherche', $valeur_recherche, PDO::PARAM_STR);
}

// Exécution de la requête SQL
$stmt->execute();


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js'></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Annuaire</title>
    <style>
        body {
            padding-top: 40px;
            background: #E6E6FA
        }

        .card {
            box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
        }

        .avatar-md {
            height: 5rem;
            width: 5rem;
        }

        .fs-19 {
            font-size: 19px;
        }

        .primary-link {
            color: #314047;
            -webkit-transition: all .5s ease;
            transition: all .5s ease;
        }

        a {
            color: #02af74;
            text-decoration: none;
        }

        .bookmark-post .favorite-icon a,
        .job-box.bookmark-post .favorite-icon a {
            background-color: #da3746;
            color: #fff;
            border-color: danger;
        }

        .favorite-icon a {
            display: inline-block;
            width: 30px;
            height: 30px;
            font-size: 18px;
            line-height: 30px;
            text-align: center;
            border: 1px solid #eff0f2;
            border-radius: 6px;
            color: rgba(173, 181, 189, .55);
            -webkit-transition: all .5s ease;
            transition: all .5s ease;
        }


        .candidate-list-box .favorite-icon {
            position: absolute;
            right: 22px;
            top: 22px;
        }

        .fs-14 {
            font-size: 14px;
        }

        .bg-soft-secondary {
            background-color: rgba(116, 120, 141, .15) !important;
            color: #74788d !important;
        }

        .mt-1 {
            margin-top: 0.25rem !important;
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo" src="./assets/images/logo.jpeg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Accueil_AS_simple.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Actualités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Forum.php">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.leetchi.com/fr/cagnottes">Cotisation / Dons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Annuaire.php">Annuaire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Discuter.php">Contacter membre du bureau</a>
                    </li>
                </ul>
                <a href="Login.php" class="btn btn-brand ms-lg-3" id="annuaire">Se déconnecter</a>
            </div>
        </div>
    </nav>

    <section class="section my-5">
        <div class="container">
            <div class="justify-content-center row">
                <div class="col-lg-12">
                    <div class="candidate-list-widgets mb-4">
                        <form id="myForm1" action="Annuaire.php" method="post">
                            <div class="g-2 row">
                                <div class="col-lg-3">
                                    <div class="filler-job-form">
                                        <i class="uil uil-briefcase-alt"></i><input name="valeur_recherche" id="exampleFormControlInput1" placeholder="Valeur pour le premier champ" type="search" class="form-control filler-job-input-box form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="filler-job-form">
                                        <i class="uil uil-location-point"></i>
                                        <select class="form-select selectForm__inner" data-trigger="true" name="choices-single-location" id="choices-single-location" aria-label="Default select example">
                                            <option value="NP">Nom &amp; Prénoms</option>
                                            <option value="P">Promotion (AS)</option>
                                            <option value="PY">Pays</option>
                                            <option value="TL">Téléphone</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="filler-job-form">
                                        <i class="uil uil-clipboard-notes"></i>
                                        <select class="form-select selectForm__inner" data-trigger="true" name="choices-single-categories" id="choices-single-categories" aria-label="Default select example">
                                            <option value="France">Section FRANCE</option>
                                            <option value="Côte d'Ivoire">Section CÔTE D'IVOIRE</option>
                                            <option value="Maroc">Section MAROC</option>
                                            <option value="">2ALSY (Tous)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div>
                                        <a class="btn btn-primary" onclick="envoyerFormulaire()" href="#"><i class="uil uil-filter"></i> Filtrer</a><a class="btn btn-success ms-2" href="#"><i class="uil uil-cog"></i> Advance</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="align-items-center row">
                        <div class="col-lg-8">
                            <div class="mb-3 mb-lg-0">
                                <h3>Retrouvez vos ami(e)s et ainés AS Alumni grâce à l'annuaire !</h3>
                                <h6 class="fs-16 mb-0">Showing 1 – 8 of <?php echo $num_rows = $stmt->rowCount(); ?></h6>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="candidate-list-widgets">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="selection-widget">
                                            <select class="form-select" data-trigger="true" name="choices-single-filter-orderby" id="choices-single-filter-orderby" aria-label="Default select example">
                                                <option value="df">Default</option>
                                                <option value="ne">Newest</option>
                                                <option value="od">Oldest</option>
                                                <option value="rd">Random</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="selection-widget mt-2 mt-lg-0">
                                            <select class="form-select" data-trigger="true" name="choices-candidate-page" id="choices-candidate-page" aria-label="Default select example">
                                                <option value="df">Tout</option>
                                                <option value="ne">12 par Page</option>
                                                <option value="ne">20 par Page</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $reponse2 = $bdd->prepare("SELECT*FROM compte WHERE Numero=?");
                        $reponse2->execute(array($row['Numero']));
                        $req2 = $reponse2->fetch();
                    ?>
                        <div class="candidate-list">
                            <div class="candidate-list-box card mt-4">
                                <div class="p-4 card-body">
                                    <div class="align-items-center row">
                                        <div class="col-auto">
                                            <div class="candidate-list-images">
                                                <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="candidate-list-content mt-3 mt-lg-0">
                                                <h5 class="fs-19 mb-0">
                                                    <a class="primary-link" href="#"><?php echo $row['Nom']; ?></a><span class="badge bg-success ms-2"><?php echo $row['Code_Promo']; ?></span>
                                                </h5>
                                                <p class="text-muted mb-2"><?php if (isset($req2['Statut'])) {
                                                                                echo $req2['Statut'];
                                                                            } else {
                                                                                echo "AS Simple";
                                                                            }
                                                                            ?></p>
                                                <ul class="list-inline mb-0 text-muted">
                                                    <li class="list-inline-item"><i class="bi bi-geo-alt-fill"></i><?php echo $row['Pays']; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-1">
                                                <span class="badge bg-soft-secondary fs-14 mt-1"><?php if (isset($req2['Emploi'])) {
                                                                                                        echo $req2['Emploi'];
                                                                                                    } else {
                                                                                                        echo "Non défini";
                                                                                                    }
                                                                                                    ?></span><span class="badge bg-soft-secondary fs-14 mt-1"><?php if (isset($req2['Email'])) {
                                                                                                            echo $req2['Email'];
                                                                                                        } else {
                                                                                                            echo "Non défini";
                                                                                                        }
                                                                                                        ?></span><span class="badge bg-soft-secondary fs-14 mt-1"><?php echo $row['Telephone']; ?></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <a href="#">
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <a href="mailto:alumni@gmail.com"><button class="btn btn-primary" type="button" style="--bs-btn-font-size: .75rem;">Contacter</button></a>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    $num_rows = $stmt->rowCount();
                    if ($num_rows == 0) {
                        echo '<p class="fs-1">Aucun Résultat !</p>';
                    }
                    ?>
                </div>
                <?php

                ?>
            </div>
            <div class="row">
                <div class="mt-4 pt-2 col-lg-12">
                    <nav aria-label="Page navigation example">
                        <div class="pagination job-pagination mb-0 justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" tabindex="-1" href="#"><i class="mdi mdi-chevron-double-left fs-15"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="mdi mdi-chevron-double-right fs-15"></i></a>
                            </li>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <a href="#"><img src="./assets/images/logo.jpeg" width="100px" height="auto" alt=""></a>
                        <div class="line"></div>
                        <p>2ALSY- Les ainés au service des cadets</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/zoamin2alsy/"><i class="ri-twitter-fill"></i></a>
                            <a href="https://www.instagram.com/2alsy_inphb/"><i class="ri-instagram-fill"></i></a>
                            <a href="https://www.linkedin.com/company/2alsy/"><i class="ri-linkedin-fill"></i></a>
                            <a href="https://www.facebook.com/zoamin2alsy/"><i class="ri-facebook-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">SERVICES</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#">Nous contacter</a></li>
                            <li><a href="#">Faire une activité</a></li>
                            <li><a href="#">Faire un don</a></li>
                            <li><a href="#">Consulter l'annuaire</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">CONTACT</h5>
                        <div class="line"></div>
                        <ul>
                            <li>PARIS, NY 3300</li>
                            <li>(33) 586 - 3017</li>
                            <li>alumni@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">© Copyright Elixir. All Rights Reserved</p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">Designed By SARAH, DAO , and JOEL💜</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function envoyerFormulaire() {
            document.getElementById('myForm1').submit();
        }
    </script>
</body>

</html>