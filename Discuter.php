<?php
session_start();

$tableau = array();

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
$req = $bdd->prepare("SELECT Id_message,Contenu,DATE_FORMAT(Date_message, '%H h %imin, %d %M %Y ') AS date_sms, 
Numero_exp, Numero_recep FROM messages WHERE (Numero_exp=? AND Numero_recep=?) OR (Numero_exp=? AND Numero_recep=?) 
ORDER BY Id_message ASC");
$req->execute(array($_SESSION['user_numero'], $_SESSION['tableau'][$_SESSION['index']], $_SESSION['tableau'][$_SESSION['index']], $_SESSION['user_numero']));


//Recuperation des membres du bureau
$req2 = $bdd->prepare("SELECT * FROM compte WHERE Statut = ?");
$req2->execute(array("AS Membre du bureau"));

//Afficher chat-about
$req4 = $bdd->prepare("SELECT*FROM liste WHERE Numero=?");
$req4->execute(array($_SESSION['tableau'][$_SESSION['index']]));
$reponse4 = $req4->fetch();

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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js'></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Discussion avec membre du bureau</title>
    <style>
        body {
            background-color: #f4f7f6;
            margin-top: 20px;
        }

        .card {
            background: #fff;
            transition: .5s;
            border: 0;
            margin-bottom: 30px;
            border-radius: .55rem;
            position: relative;
            width: 100%;
            box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
        }

        .chat-app .people-list {
            width: 280px;
            position: absolute;
            left: 0;
            top: 0;
            padding: 20px;
            z-index: 7
        }

        .chat-app .chat {
            margin-left: 280px;
            border-left: 1px solid #eaeaea
        }

        .people-list {
            -moz-transition: .5s;
            -o-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s
        }

        .people-list .chat-list li {
            padding: 10px 15px;
            list-style: none;
            border-radius: 3px
        }

        .people-list .chat-list li:hover {
            background: #efefef;
            cursor: pointer
        }

        .people-list .chat-list li.active {
            background: #efefef
        }

        .people-list .chat-list li .name {
            font-size: 15px
        }

        .people-list .chat-list img {
            width: 45px;
            border-radius: 50%
        }

        .people-list img {
            float: left;
            border-radius: 50%
        }

        .people-list .about {
            float: left;
            padding-left: 8px
        }

        .people-list .status {
            color: #999;
            font-size: 13px
        }

        .chat .chat-header {
            padding: 15px 20px;
            border-bottom: 2px solid #f4f7f6
        }

        .chat .chat-header img {
            float: left;
            border-radius: 40px;
            width: 40px
        }

        .chat .chat-header .chat-about {
            float: left;
            padding-left: 10px
        }

        .chat .chat-history {
            padding: 20px;
            border-bottom: 2px solid #fff
        }

        .chat .chat-history ul {
            padding: 0
        }

        .chat .chat-history ul li {
            list-style: none;
            margin-bottom: 30px
        }

        .chat .chat-history ul li:last-child {
            margin-bottom: 0px
        }

        .chat .chat-history .message-data {
            margin-bottom: 15px
        }

        .chat .chat-history .message-data img {
            border-radius: 40px;
            width: 40px
        }

        .chat .chat-history .message-data-time {
            color: #434651;
            padding-left: 6px
        }

        .chat .chat-history .message {
            color: #444;
            padding: 18px 20px;
            line-height: 26px;
            font-size: 16px;
            border-radius: 7px;
            display: inline-block;
            position: relative
        }

        .chat .chat-history .message:after {
            bottom: 100%;
            left: 7%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-bottom-color: #fff;
            border-width: 10px;
            margin-left: -10px
        }

        .chat .chat-history .my-message {
            background: #efefef
        }

        .chat .chat-history .my-message:after {
            bottom: 100%;
            left: 30px;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-bottom-color: #efefef;
            border-width: 10px;
            margin-left: -10px
        }

        .chat .chat-history .other-message {
            background: #e8f1f3;
            text-align: right
        }

        .chat .chat-history .other-message:after {
            border-bottom-color: #e8f1f3;
            left: 93%
        }

        .chat .chat-message {
            padding: 20px
        }

        .online,
        .offline,
        .me {
            margin-right: 2px;
            font-size: 8px;
            vertical-align: middle
        }

        .online {
            color: #86c541
        }

        .offline {
            color: #e47297
        }

        .me {
            color: #1d8ecd
        }

        .float-right {
            float: right
        }

        .clearfix:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0
        }

        @media only screen and (max-width: 767px) {
            .chat-app .people-list {
                height: 465px;
                width: 100%;
                overflow-x: auto;
                background: #fff;
                left: -400px;
                display: none
            }

            .chat-app .people-list.open {
                left: 0
            }

            .chat-app .chat {
                margin: 0
            }

            .chat-app .chat .chat-header {
                border-radius: 0.55rem 0.55rem 0 0
            }

            .chat-app .chat-history {
                height: 300px;
                overflow-x: auto
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 992px) {
            .chat-app .chat-list {
                height: 650px;
                overflow-x: auto
            }

            .chat-app .chat-history {
                height: 600px;
                overflow-x: auto
            }
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
            .chat-app .chat-list {
                height: 480px;
                overflow-x: auto
            }

            .chat-app .chat-history {
                height: calc(100vh - 350px);
                overflow-x: auto
            }
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

    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card chat-app">
                    <div id="plist" class="people-list">
                        <div class="input-group">
                            <div class="input-group-prepend" id="searchIcon">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" id="filterInput" placeholder="Search...">
                        </div>
                        <ul id="liste" class="list-unstyled chat-list mt-2 mb-0">
                            <?php
                            $i = 0;
                            while ($reponse2 = $req2->fetch()) {
                                $req3 = $bdd->prepare("SELECT*FROM liste WHERE Numero=?");
                                $req3->execute(array($reponse2['Numero']));
                                $reponse3 = $req3->fetch();
                                $tableau[$i] = $reponse2['Numero'];
                            ?>
                                <li class="clearfix">
                                    <img src="Images/téléchargement.png" alt="avatar">
                                    <div class="about">
                                        <div class="name"><?php echo $reponse3['Nom']; ?></div>
                                        <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>
                                    </div>
                                </li>
                            <?php
                                $i++;
                            }
                            $_SESSION['tableau'] = $tableau;
                            ?>
                        </ul>
                    </div>
                    <div class="chat">
                        <div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                        <img src="Images/téléchargement.png" alt="avatar">
                                    </a>
                                    <div class="chat-about">
                                        <h6 class="m-b-0"><?php echo $reponse4['Nom']; ?></h6>
                                        <small>Last seen: 2 hours ago</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 hidden-sm text-right">
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="chat-history">
                            <?php
                            while ($reponse = $req->fetch()) {
                            ?>
                                <ul class="m-b-0">
                                    <?php
                                    if ($reponse['Numero_exp'] == $_SESSION['user_numero']) {
                                    ?>
                                        <li class="clearfix">
                                            <div class="message-data text-right">
                                                <span class="message-data-time"><?php echo $reponse['date_sms']; ?></span>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                            </div>
                                            <div class="message other-message float-right"><?php echo $reponse['Contenu']; ?></div>
                                        </li>
                                    <?php
                                    } else {
                                    ?>
                                        <li class="clearfix">
                                            <div class="message-data">
                                                <span class="message-data-time"><?php echo $reponse['date_sms']; ?></span>
                                            </div>
                                            <div class="message my-message"><?php echo $reponse['Contenu']; ?></div>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="chat-message clearfix">
                            <form id="myForm" action="Traitement/envoi_message.php" method="post">
                                <div class="input-group mb-0">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i onclick="envoyerFormulaire()" class="fa fa-send"></i></span>
                                    </div>
                                    <input type="text" name="sms" id="sms" class="form-control" placeholder="Entrer votre message ici..." required>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function envoyerFormulaire() {
            var inputValeur = document.getElementById("sms").value;
            if (inputValeur.trim() === "") {
                alert("Veillez écrire un message avant d'envoyer.");
                return false;
            }
            document.getElementById('myForm').submit();
        }
    </script>
    <script>
        var listeLi = document.querySelectorAll('#liste li');
        listeLi.forEach(li => {
            li.addEventListener('click', () => {
                listeLi.forEach(item => {
                    item.classList.remove('active');
                });

                li.classList.add('active');

                //Recupération de l'index de l'élément cliqué
                var index = Array.from(listeLi).indexOf(li);

                // Envoi de l'index au serveur via AJAX
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'Stocker_index.php');
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        // La valeur de l'index a été stockée dans la session côté serveur
                        console.log('Index stocké dans la session PHP.');
                    } else {
                        console.log('Erreur lors du stockage de l\'index dans la session PHP.');
                    }
                };
                xhr.send('index=' + index);
                window.location.href = "Discuter.php"
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sélection de l'élément de formulaire et ajout d'un écouteur d'événements
            const searchIcon = document.getElementById('searchIcon');
            searchIcon.addEventListener('click', filterItems);
        });

        function filterItems() {
            // Récupération de la valeur saisie dans le formulaire
            const filterValue = document.getElementById('filterInput').value.toUpperCase();

            // Sélection de tous les éléments de la classe 'item'
            const items = document.querySelectorAll('.item');

            // Parcours de chaque élément et affichage ou masquage en fonction de la saisie
            items.forEach(item => {
                const textValue = item.textContent || item.innerText;
                if (textValue.toUpperCase().indexOf(filterValue) > -1) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>
</body>

</html>