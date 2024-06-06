<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2ALSY FRANCE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo" src="./assets/images/logo.jpeg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">AS-Encyclopédie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Actualités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Assemblée Générale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.leetchi.com/fr/cagnottes">Faire un don</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <a href="Login.php" class="btn btn-brand ms-lg-3" id="annuaire">Se connecter</a>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">2ALSY-FRANCE</h1>
                    <h5 class="text-white mt-3 mb-4" data-aos="fade-right">L'Amicale des Anciens du Lycée Scientifique de Yamoussoukro section France</h5>
                    <div data-aos="fade-up" data-aos-delay="50">
                        <a href="Acceuil.php" class="btn btn-brand me-2">NON AS</a>
                        <a href="Login.php" class="btn btn-light ms-2">AS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Mot de la Présidente</h1>
                        <div class="line"></div>
                        <p>Notre lycée a une longue et riche histoire de formation de jeunes esprits 
                            brillants et talentueux qui ont contribué de manière significative au
                             développement de notre nation et du monde entier. 
                             Je suis honorée de faire partie de cette communauté d'anciens élèves distingués et 
                             d'avoir l'opportunité de servir en tant que votre présidente.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
                    <img src="./assets/images/présidente.jpg" alt="">
                </div>
                <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
                    <h1>Dr Amin Yolande</h1>
                    <p class="mt-3 mb-4">Entrepreneur</p>
                    <div class="d-flex pt-4 mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-mail-send-fill"></i>
                        </div>
                        <div>
                            <h5>Assemblée Générale</h5>
                            <p>Rencontrez l'équipe qui donne vie à l'association et découvrez leurs projets ambitieux pour l'avenir.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-user-5-fill"></i>
                        </div>
                        <div>
                            <h5>AS-Encyclopédie</h5>
                            <p>Avec plus de 51 années d'archives, l'AS Encyclopaedia présente plus de 8 000 pages de projets</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="iconbox me-4">
                            <i class="ri-rocket-2-fill"></i>
                        </div>
                        <div>
                            <h5>Annuaire des AS</h5>
                            <p>Restons connectés à travers le monde entier</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- COUNTER -->
    <section id="counter" class="section-padding">
        <div class="container text-center">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <h1 class="text-white display-4">90,00+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Taux de réussite aux examens BEPC/BAC</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <h1 class="text-white display-4">58K+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">ALUMNI du monde entier</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <h1 class="text-white display-4">5M+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Cagnotte collective</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <h1 class="text-white display-4">100+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Qctivités et évenements</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG -->
    <section id="blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">L' ACTU  DU  MOMENT</h1>
                        <div class="line"></div>
                        <p> Suivez l'actualité en direct et restez informé(e) des derniers événements de notre communauté</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/actu5.jpg" alt="">
                        </div>
                        <h5 class="mt-4">Visite des AS20 au lycée</h5>
                        <p>Je vous rappelle qu'il est toujours possible de s'inscrire pour le hackathon 🤩.
                            Soit vous participez au développement de l'Application Web, soit à la conception du Logo, ou alors aux 2 🥳.
                            Si pour l'instant vous êtes seul.e, et souhaitez prendre part au hackathon, nous pouvons vous faire intégrer une équipe 🤗.
                            </p>
                        <a href="#">En Savoir Plus</a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/actu2.jpg" alt="">
                        </div>
                        <h5 class="mt-4">HERNIE DISCALE LOMBAIRE</h5>
                        <p>La sciatique peut être causée par une hernie discale lombaire.
                            Le saviez-vous ?!</p>
                        <a href="#">En Savoir Plus</a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/actu4.jpg" alt="">
                        </div>
                        <h5 class="mt-4">Joyeuse fête</h5>
                        <p>Que l'Amour véritable les uns pour les autres soit notre Loi et la Boussole de toutes nos Actions</p>
                        <a href="#">En Savoir Plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- REVIEW -->
    <section id="reviews" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Le FORUM</h1>
                        <div class="line"></div>
                        <p>N'hésitez pas à vous joindre à la conversation ! </p>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>On verra bien à la rentrée scolaire prochaine ou en seront les travaux et on pourra déjà faire une première évaluation. Je pense que la fondation de la 2alsy avec à sa tête mon cadet choc @~Ange Abou  est au courant du planning et pourra nous édifier au fil des temps. Sinon pour nous qui sommes assis à plus de 6000 km et allons voir le lycée tous les 20 ans, nous serons incapables d’avoir de bonnes informations sur les travaux de rénovation prévus .</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar3.webp" width="70px" height="auto">
                            <div class="ms-3">
                                <h5>Dianne Blehi</h5>
                                <small>AS 20</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Bonjour mon aînée chic, l’un des buts nobles de la Fondation est toujours de couvrir au moins une ligne budgétaire du LSY (aussi petite soit elle) … et c’est toujours d’actualité. Pour cela, nous avons toujours besoin de vos cotisations (comme la dîme pour le LSY). N’hésite pas à me contacter inbox et à envoyer d’autres aussi qui sont intéressés par cet objectif atteignable ensemble. 💙</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar2.webp" width="70px" height="auto" alt="">
                            <div class="ms-3">
                                <h5>Kouakou Russell</h5>
                                <small>AS 17</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Hello cher AS. Y’a t-il des AS résidents à La miens svp? Un cadet a besoin d’une attestation d’hébergement pour sa démarche du visa dans le cadre de ses études.
                                Merci d’avance pour lui.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar6.jpg" width="70px" height="auto" alt="">
                            <div class="ms-3">
                                <h5>Kone DAO </h5>
                                <small>AS 41</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>C'est quoi la stratégie ? La vision ?
                                Éradiquer le terrorisme ?!? Rien que ça 🙈... 
                                C'était peut-être eux les terroristes oui 🙈..
                                Quand il n'y a aucun organe indépendant pour vérifier ce qui est mis en place, évidemment que tout marche parfaitement...</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar4.png" width="70px" height="auto" alt="">
                            <div class="ms-3">
                                <h5>JOJO K</h5>
                                <small>AS 01 </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="550">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>J'aime cette définition de l'intellectuel du philosophe congolais Zacharie Bowao...
                                ...L'intellectuel c'est surtout celui qui prend position clairement et de manière critique sur les problèmes de son époque en ne s'engageant pas à défendre l'indéfendable et expliquer l'inexplicable dans une sorte de langage de bois qui prostitue le savoir dont il est l'incarnation...</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar1.jpg" width="70px" height="auto" alt="">
                            <div class="ms-3">
                                <h5>Rassi19</h5>
                                <small>AS 23</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="650">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Mon interrogation sur l'éducation de la population demeure. Les 20% de la population du pays, qui paient les impôts dans ce pays, participent à la richesse du pays. Si tout le monde est encarté dans un parti, qui va faire vivre le pays ? Les entrepreneurs ont également leur rôle...Et cela demande énormément d'heures de travail..
                            </p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar5.png" width="70px" height="auto" alt="">
                            <div class="ms-3">
                                <h5>user34</h5>
                                <small>AS 44</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section id="team" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">ASSEMBLEE GENERALE</h1>
                        <div class="line"></div>
                        <p>Découvrons les membres du bureau de la 2ALSY section FRANCE </p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center ">
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/bureau1.webp" width="300px" height="auto" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Annick Dion</h4>
                            <p class="mb-0 text-white">La présidente</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/bureau2.jpeg" width="300px" height="auto" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Kouehi joel</h4>
                            <p class="mb-0 text-white">Sécrétaire Générale</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/bureau1.webp" width="300px" height="auto" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Flora Kouassi</h4>
                            <p class="mb-0 text-white">Trésorière</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="section-padding bg-light" id="contact">
        <div class="container">
            <div id="info" class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 text-white fw-semibold">Pour les Non AS</h1>
                        <div class="line bg-white"></div>
                        <p class="text-white">Notre famille vous est ouverte. Ecrivez nous pour plus d'informations ou nous envoyer un message</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
                <div class="col-lg-8">
                    <form action="#" class="row g-3 p-lg-5 p-4 bg-white theme-shadow">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" placeholder="Entrez votre nom">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" placeholder="Entrez votre Prénom">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="email" class="form-control" placeholder="votre adresse mail">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" class="form-control" placeholder="L'objet">
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea name="message" rows="5" class="form-control" placeholder="Entrez votre message"></textarea>
                        </div>
                        <div class="form-group col-lg-12 d-grid">
                            <button class="btn btn-brand">Envoyer le Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
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
                            <li><a href="mailto:2alsy@gmail.com">Nous contacter</a></li>
                            <li><a href="#info">Faire une activité</a></li>
                            <li><a href="https://www.leetchi.com/fr/cagnottes">Faire un don</a></li>
                            <li><a href="Login.php">Consulter l'annuaire</a></li>
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





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>