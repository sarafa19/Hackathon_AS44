<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2ALSY FRANCE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link media="all" rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="Logo 2ALSY.png" type="image/png+xml">
</head>
<style>
        .single-schedules-inner {
            margin-bottom: 30px;
        }
        .date {
            font-size: 14px;
            margin-bottom: 10px;
        }
        .media img {
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }
        .media-body h6 {
            margin-bottom: 0;
        }
    </style>

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
                        <a class="nav-link" href="#about">Agenda</a>
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
                        <a class="nav-link" href="#contact">Contacter membre du bureau</a>
                    </li>
                </ul>
                <a href="Deconnexion.php" class="btn btn-brand ms-lg-3" id="annuaire">Se déconnecter</a>
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
                        <a href="Acceuil.php" class="btn btn-light me-2">NON AS</a>
                        <a href="Accueil_AS_simple.php" class="btn btn-brand ms-2">AS</a>
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

    <div class="schedules-area pd-top-110 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-title text-center">
                        <h1>OPPORTUNITES DISPONIBLE</h1>
                        <p> Vous trouverez ici les opportunités disponibles. Les offres de stages, les opportunités d'emploi et d'investisement ainsi que les opportunités de business.</p>
                    </div>
                </div>
            </div>
            <div class="evt-tab-inner text-center">
                <ul class="nav nav-tabs" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="ex1-tab-1" data-toggle="tab" href="#ex1-tabs-1" role="tab" aria-selected="true"><span>STAGES</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-2" data-toggle="tab" href="#ex1-tabs-2" role="tab" aria-selected="false"><span>BUSINESS</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-3" data-toggle="tab" href="#ex1-tabs-3" role="tab" aria-selected="false"><span>EMPLOI</span></a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="ex1-content">
                <div class="tab-pane fade active show" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    Du 24 juin - au 30 Aout 2024
                                </div>
                                <h5>Stage de management.</h5>
                                <p>RECRUTEMENT : MANAGER 🔴 DESCRIPTION
 En tant que Key Account Manager (KAM), vous serez responsable de la gestion des relations avec les clients stratégiques. Vous travaillerez en étroite collaboration avec les clients pour comprendre leurs besoins et objectifs commerciaux, et vous utiliserez ces informations pour développer et mettre en œuvre des stratégies visant à renforcer la relation client, à accroître la fidélité et à stimuler la croissance des revenus.</p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>M. COULIBALY AS23</h6>
                                        <p>Ceo de la boite.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    Du 01 Mars - au 30 Aout 2024
                                </div>
                                <h5>STAGE DE COMMERCIAL.</h5>
                                <p>RECRUTEMENT : COMMERCIAL 🔸 Responsabilités principales : 
- Gérer un portefeuille de clients stratégiques et établir des relations solides avec eux; 
- Comprendre les besoins et les objectifs des clients pour proposer des solutions adaptées; 
- Surveiller et analyser les performances des comptes clients, identifier les opportunités de croissance et les risques potentiels; 
- Préparer et présenter des rapports réguliers sur l'état des comptes clients et les progrès réalisés.</p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>Dr. Ariful Islam Abid AS11</h6>
                                        <p>Responssable vente.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner lunch-schedules text-center">
                                <div class="lunch-schedules-inner align-self-center">
                                    <div class="icons">
                                        <img src="https://www.bootdey.com/image/200x200/00FFFF/000000" alt="img">
                                    </div>
                                    <h5>Informations non disponible</h5>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i>
                                        Du *** - au ***
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    Du 01 juin - au 30 Septembre 2024
                                </div>
                                <h5>STAGE DE DEVELOPPEUR WEB.</h5>
                                <p>RECRUTEMENT : DEVELOPPEUR WEB 
                                🔵 Qualifications requises : 
                                    Compétences Techniques

Maîtrise des langages de programmation 
Connaissance des frameworks et bibliothèques 
Maîtrise des bases de données 
Compétences en design responsif 
Connaissance des outils de versionnement 
Compétences en sécurité web 
Compétences Interpersonnelles
Capacité de résolution de problèmes 
Communication 
Adaptabilité et flexibilité 
Gestion du temps 
Travail d'équipe 
Attention aux détails 
💼 Conditions de Travail  
- Lieu de travail : Abidjan, Côte d'Ivoire;
# credong@yahoo.fr
                                </p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>M.Bertrant OUATTARA AS20</h6>
                                        <p>Renponsable developpement</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                   Du 01 juin - au 31 Aout 2024
                                </div>
                                <h5>STAGE DE MECATRONIQUE</h5>
                                <p>RECRUTEMENT : MECANICIEN
                                    🔵 Qualifications requises : 
                                    Compétences

Maîtrise de la mecanique de base 
Connaissance des équipement technique 
Maîtrise des bases logiciels de maquette
Compétences en design responsif 
Connaissance des outils de versionnement 
Compétences en sécurité web 
Compétences Interpersonnelles
Capacité de résolution de problèmes 
Communication 
Adaptabilité et flexibilité 
Gestion du temps :
Travail d'équipe :
Attention aux détails :
💼 Conditions de Travail : 
- Lieu de travail : Abidjan, Côte d'Ivoire;
# credong@yahoo.fr</p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>M. joseph ollahoni AS13</h6>
                                        <p>Mecanicien chef à CFAO.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    Du 25 juin - au 31 Aout 2024
                                </div>
                                <h5>STAGE MARKET RESEARCHER.</h5>
                                <p>Responsabilities
·      Receives clients’ briefs, prepare proposals based on the former, plan, design, conduct and manage Market Research projects, report on findings and present these to clients
·      Follow instructions from your client about the nature of the research to be carried out
·      Use an appropriate and creative methodology to design and manage a research project, which may involve the use of quantitative and/or qualitative methods and may include both pilot and development work
·      Design and write questionnaires
·      Apply a range of research techniques to gather relevant information, including document analysis, surveys, case studies and interviews (face-to-face, telephone and online)
</p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>Dr. Richard KOFFI AS10</h6>
                                        <p>Manager à REFCI.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    DISPONIBLE ACTUELLEMENT
                                </div>
                                <h5>Pour un contact de confiance,.</h5>
                                <p>Je recherche un Senior Business Developer (H/F) ayant une expérience avérée de 7 à 10 ans chez des concessionnaires automobiles.

Tu es dynamique, tenace, percutant, orienté résultat, doté d’une excellente orientation client… partage moi ton CV au format PDF à l’adresse : michaelkotokpa1984@gmail.com en mentionnant l’intitulé du poste en objet.

Poste basé à Abidjan, Côte d’ivoire

NB : Seules les candidatures présélectionnées seront contactées.</p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>Dr. DAO AS44</h6>
                                        <p>Investiseur & homme d'affaire.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner lunch-schedules text-center">
                                <div class="lunch-schedules-inner align-self-center">
                                    <div class="icons">
                                        <img src="https://www.bootdey.com/image/200x200/00FFFF/000000" alt="img">
                                    </div>
                                    <h5>BIENTOT...</h5>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i>
                                        NON DISPONIBLE ACTUELLEMENT
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    DISPONIBLE ACTUELLEMENT
                                </div>
                                <h5>recherche sur Dakar et Abidjan :.</h5>
                                <p>D'un OPS Manager / responsable d'activité ayant le profil ci-dessous:

- Expérience similaire de 2 ans minimum en centre d'appels 
- Bilingue obligatoire

Un Team Manager/Responsable d'équipe ayant le profil ci-dessous : 

- Expérience similaire de 2 ans minimum en centre d'appels 
- Bilingue obligatoire

Un Learning Specialist/Formateur ayant le profil ci-dessous

- Expérience similaire de 2 ans minimum en centre d'appels 
- Bilingue obligatoire

Un Learning Manager/Responsable formation ayant le profil ci-dessous

- Expérience similaire de 2 ans minimum en centre d'appels 
- Bilingue obligatoire

Pour postuler : sebastien.couchard@foundever.com </p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>Dr. youssouf fall AS05</h6>
                                        <p>BUSINESS MAN.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    DISPONIBLE ACTUELLEMENT
                                </div>
                                <h5>Pour les particuliers.</h5>
                                <p>Recherche d'un Responsable de dépôt pétrolier H/F pour un clients au Togo, un acteur majeur du secteur de l'hydrocarbure. Le profil recherché devrait avoir une expérience avérée dans la logistique pétrolière et/ou aéroportuaire.

Les candidatures sont reçues (CV détaillé + références) à l'adresse suivante : recrutement@opartners.net.</p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>M. BAH MAMADOU LABAS AS25</h6>
                                        <p>DJASSAMAN.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    DISPONIBLE ACTUELLEMENT
                                </div>
                                <h5>Le CIFIP.</h5>
                                <p>recrute pour le secteur des Services
RESPONSABLE MARQUE EMPLOYEUR (H/F)

Description du poste
Votre principale mission consiste à définir et piloter la mise en œuvre de la stratégie de développement de la marque employeur, dans l’objectif d’attirer des talents et de renforcer le sentiment d’appartenance du personnel.
A ce titre, vous aurez à :

♦ Encadrer la création des différents outils de communication destinés aux recrutements ;

♦ Contribuer à l’animation des partenariats nationaux et internationaux avec des écoles de référence ;

Merci d’adresser C.V & prétentions salariales à :        
recrutement@cifip-ci.com </p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>M. DINGO MAMADOU AS30</h6>
                                        <p>Recruteur internationnale.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    DISPONIBLE ACTUELLEMENT
                                </div>
                                <h5>Offre d'emploi :.</h5>
                                <p>Nous recherchons une personne passionnée par la mode et dotée d'un excellent sens du service client pour rejoindre notre équipe en tant que vendeuse dans notre boutique de mode.
Responsabilités :
* Accueillir et conseiller les clients avec enthousiasme et professionnalisme
* Assurer la présentation soignée des produits en magasin
* Maintenir un environnement de travail propre et organisé
* 
Exigences :
* Habiter la zone Riviera, Bingerville ou Angre
* Capacité à travailler de manière autonome et en équipe
* Flexibilité pour travailler les weekends et les jours fériés selon les besoins de la boutique
 Veuillez envoyer votre CV  au numéro WhatsApp suivant   0767522252</p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>M. YAO FULL KOUAO AS27</h6>
                                        <p>LE RESPONSABLE.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
                <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    DISPONIBLE ACTUELLEMENT
                                </div>
                                <h5>Offre d'emploi.</h5>
                                <p>Nous recherchons Urgemment :

- Un conducteur Expérimenté de Tricycle 
- Habitant la commune de Yopougon et environs.
- Sérieux, Poli et Honnête
- Travailleur, Combatif et Dynamique. 
- Le Permis A serait un plus.
- Savoir Lire et Écrire serait un Atout. 
- Être disponible immédiatement 

Poste :
Commercial - Livreur de Boissons rafraîchissantes. 


NB = Merci de nous faire savoir votre prétention salariale et vos attentes.

La Direction Commerciale.

Contact : 0708863501</p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>Dr. ABIB LAS AS25</h6>
                                        <p>Le Directeur Commerciale.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    DISPONIBLE ACTUELLEMENT
                                </div>
                                <h5>𝐎𝐏𝐏𝐎𝐑𝐓𝐔𝐍𝐈𝐓𝐄 𝐃'𝐄𝐌𝐏𝐋𝐎𝐈 .</h5>
                                <p>Pour la réalisation de ses activités en Côte d’Ivoire, la #GIZ lance plusieurs appels à
candidatures pour le recrutement de plusieurs postes

Ton rêve c’est de rejoindre une organisation internationale ?

Tu te sens à la hauteur des postes à pourvoir ? 

Les liens sont ci-dessous, tu sais ce qu’il te reste à faire.😉

1- Conseiller.ère Junior Etat de droit , démocratie , bonne gouvernance
https://lnkd.in/ecrWjKje

2- Conseiller.ère Junior Etat de Droit, Démocratie et Bonne Gouvernance (Animateur.trice rural.e -Gouvernance et Cohésion sociale)
https://lnkd.in/eJnVNrXJ

3- Conseiller.ère Junior Etat de Droit, Démocratie, Bonne Gouvernance
https://lnkd.in/eR4dD7f2

4- Expert.e Achats et Gestion des Contrats
https://lnkd.in/ePxFDdHD

5- Expert.e en Communication
https://lnkd.in/e9z7c4yv

6- Conseiller.ère Développement rural
https://lnkd.in/ehBrz3e6

7- Conseiller.ère Coopération Economique et Promotion du Secteur Privé
https://lnkd.in/e3UC-eRe

8- Conseiller.ère Junior Coopération Economique et Promotion du Secteur Privé
https://lnkd.in/eNdMWPvP

9- Expert.e Financier.ière
https://lnkd.in/e_7THGVY

10- Conseiller.ère Crise, Conflits et Catastrophes
https://lnkd.in/eHrKNU74

#emploi #job
</p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>Dr. Amin Yolande AS12</h6>
                                        <p>PCA 2ALSY.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner lunch-schedules text-center">
                                <div class="lunch-schedules-inner align-self-center">
                                    <div class="icons">
                                        <img src="https://www.bootdey.com/image/200x200/FF1493/000000" alt="img">
                                    </div>
                                    <h5>BIENTOT...</h5>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i>
                                        NON DISPONIBLE ACTUELLEMENT
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    DISPONIBLE ACTUELLEMENT
                                </div>
                                <h5>AVIS DE RECRUTEMENT.</h5>
                                <p>Dans le cadre du renforcement de son personnel, le Village des Technologies de l’Information et de la Biotechnologie (VITIB S.A.) recrute les profils suivants :

- Chargé(e) des Relations Publiques et de la Promotion :
https://lnkd.in/eatW9Jmw

- Chargé(e) de la Coopération Internationale : 
https://lnkd.in/eaaGc5ca

- Informaticien (Ingénieur de conception) :
https://lnkd.in/evu-pTnP

- Electricien (technicien) :
https://lnkd.in/eMF8wmk3

- Agents aux Achats et de l’approvisionnement :
https://lnkd.in/e2frD4tZ

- Ingénieur Travaux :
https://lnkd.in/eUVDEaYr

- Agent Guichet Unique : 
https://lnkd.in/ebF5fAPC

- Gestionnaire des Comptes Clients : 
https://lnkd.in/eDJ7_tHZ

- Comptable Trésorier Fiscaliste :
https://lnkd.in/enWJ7mn9

- Agent Administratif (Gestion du courrier et des archives) :
https://lnkd.in/eytNDgpH

Pour la constitution du dossier :
• Un Curriculum Vitae. 
• Une lettre de motivation ;
• Une copie du ou des diplôme (s) requis ;
• Une ou des attestation(s) de travail en lien avec les qualifications requises.

Les descriptions de postes sont disponibles en cliquant sur le lien en dessous de chaque poste.

Les candidatures devront être déposées électroniquement, par courriel à l'adresse électronique : recrutement@vitib.ci en mentionnant en objet l’intitulé du poste.

La date limite de réception des candidatures est fixée au Vendredi 24 Mai 2024 à 23H59.
#VITIB #offredemploi</p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>M. ASSAUD CEDRIC ELOGE AS44</h6>
                                        <p>President fondateur de PLAVON STORE.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    DISPONIBLE ACTUELLEMENT
                                </div>
                                <h5>Recrutement de Gestionnaire de stock site.</h5>
                                <p>Volet de la gestion de stocks :

Réceptionner, contrôler et ranger les pièces et les fournitures provenant du siège Abidjan ou des achats directs sur site (Matériel de travail, Equipements, intrants …)
S’assurer de la conformité des livraisons physiques (quantitative et qualitative) ;
Vérifier et valider tous les bons de sortie magasin ;
Vérifier et valider les demandes d’achat du site ou de la zone ;

Volet gestion administrative :

Renseigner les supports de suivi d'activité et identifier les écarts ;
Gérer l’aspect administratif et financier du personnel de la Zone ; 
Contribue au maintien d’un climat favorable pour la bonne marche et l’exécution du travail ;

Profil : 

BAC + 2/3 ou en Comptabilité ou en Gestion
2 à 3 ans d’expériences professionnelles en contrôle de gestion ou gestion de stocks sur un site Agro-industriel ou Agropastoral ou en Plantation industrielle

Localisation : Intérieur du pays

Cv à l’adresse : pole.recrutement24@gmail.com

hashtag#recrutement hashtag#controleurdegestion hashtag#gestiondestock hashtag#gestionadmin hashtag#comptabilité</p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>M. Kouéhi ange joel AS44</h6>
                                        <p>ELEVE Ingénieur à L'INP-HB.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    DISPONIBLE ACTUELLEMENT
                                </div>
                                <h5>Proposition Emploi.</h5>
                                <p>
                                Une entreprise de la place ( en CÔTE D IVOIRE ) qui a des besoins de country managers à Abidjan , Dakar et Conakry donc 3 profils 

Besoins de Recrutement : 

- Besoin 1: Country manager Guinéen ( nationalité guinéenne i.e connaissant les réalités locales et ayant étudié à Paris ou Abidjan , background business school ) , fort potentiel et désireux de lever des challenges.

- Poste basé à Conakry 

- Besoin 2: Country manager déjà à Dakar ou Abidjan ayant étudié à Paris ou Abidjan , background business school ) , fort potentiel et désireux de relever des challenges. Scope : développement d activités :Profil commercial 
- ⁠Localisation du poste: Dakar 

- Besoin 3: Senior business développer : Manager commercial secteur privé Abidjan.
- ⁠Background: école de commerce , profil «  repat  ».

Actions équipe Abidjan : transmission des deux fiches de poste ( country managers et senior business développer Abidjan )


Pls les Excellents, partagez moi les profils dans mon numéro Whatsapp..</p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>Dr. DASF</h6>
                                        <p>ELEVE Ingénieur EFREI PARIS.</p>
                                    </div>
                                </div>
                            </div>
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
    <div class="content-wrapper">
                      <section class="content-block">
                          <div class="container">
                              <div class="block-heading bottom-space">
                                  <h2 class="block-top-heading">EVENEMENT A VENIR</h2>
                                  <h3 class="block-main-heading">Les AS de FRANCE vous proposent de nombreux futur evenements</h3>
                                  <span class="block-sub-heading">Rejoins nous pour nous aider à organiser les prochains Evenements et rejoins le mouvement.</span>
                                  <div class="divider"><img src="img/divider.png" alt="images description"></div>
                              </div>
                              <div class="team-container">
                                  <div class="owl-carousel group-slide bottom-m-space">
                                      <div class="slide-item">
                                          <figure class="team-box caption-fade-up">
                                              <div class="img-block gray-scale">
                                                  <img src="assets/images/Image 24.jpg" alt="images description">
                                              </div>
                                              <figcaption class="text-right">
                                                  <strong class="content-title mb-0">Parainage de nos nouveaux membres</strong>
                                                  <span class="sub">lieux: Paris18 <br>Data: 24 Septembre 2024</span>
                                              </figcaption>
                                          </figure>
                                      </div>
                                      <div class="slide-item">
                                          <figure class="team-box caption-fade-up">
                                              <div class="img-block gray-scale">
                                                  <img src="assets/images/img-07.jpg" alt="images description">
                                              </div>
                                              <figcaption class="text-right">
                                                  <strong class="content-title mb-0">Journée Sportive </strong>
                                                  <span class="sub">Lieu: STADE DE FRANCE <br>Date: 18 Octobre 2024</span>
                                              </figcaption>
                                          </figure>
                                      </div>
                                      <div class="slide-item">
                                          <figure class="team-box caption-fade-up">
                                              <div class="img-block gray-scale">
                                                  <img src="assets/images/img-35.jpg" alt="images description">
                                              </div>
                                              <figcaption class="text-right">
                                                  <strong class="content-title mb-0">Recompence de nos meilleurs AS</strong>
                                                  <span class="sub">Lieu: rue 1034 <br>Date: 10 Décembre 2024</span>
                                              </figcaption>
                                          </figure>
                                      </div>
                                      <div class="slide-item">
                                          <figure class="team-box caption-fade-up">
                                              <div class="img-block gray-scale">
                                                  <img src="assets/images/visual-small-11.jpg" alt="images description">
                                              </div>
                                              <figcaption class="text-right">
                                                  <strong class="content-title mb-0">Diner GALA 2ALSY-France</strong>
                                                  <span class="sub">Lieu: Salle des fetes <br>Date: 23 Décembre 2024</span>
                                              </figcaption>
                                          </figure>
                                      </div>
                                  </div>
                                   <p>  La 2ALSY-France vous informe en temps réelle et en avance de ces différents Evenements.  </p>
                                   <a class="btn btn-primary has-radius-small" href="#">En savoir plus</a>
                              </div>
                        </div>
                    </section>
                </div>
                
                      </section>
                      <section class="content-block quotation-block quotation-block-v5 black-overlay-5 parallax" data-stellar-background-ratio="0.55">
                          <div class="container">
                              <div class="inner-wrapper">
                                  <div class="block-heading text-right">
                                      <h3 class="block-top-heading text-white">Visiter nos autres sections à travers le monde</h3>
                                      <h2 class="block-main-heading text-white">2ALSY-France</h2>
                                      <span class="block-sub-heading text-white">Les Ainés aux services des cadets, <br> #AS UN JOUR AS TOUJOURS, <br> #AS FORT, <br> #2ALSY</span>
                                      <div class="divider"><img src="img/divider-white.png" alt="images description"></div>
                                  </div>
                              </div>
                          </div>
                      </section>
                      <section class="content-block">
                          <div class="container">
                              <div class="row multiple-row v-align-row">
                                  <div class="col-lg-4 col-md-6">
                                      <div class="col-wrap">
                                          <div class="block-heading">
                                              <h3 class="block-top-heading">Nos 14 Section partout dans le monde</h3>
                                              <h2 class="block-main-heading">Retrouvez les ici</h2>
                                              <span class="block-sub-heading">Nos Réunions, Rencontres & Evenements.</span>
                                              <div class="divider"><img src="img/divider.png" alt="images description"></div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6">
                                      <div class="col-wrap">
                                          <div class="ico-box bg-gray-light dark-hover">
                                              <div class="icon">
                                                  <img class="icon-size" src="Logo 2ALSY.png">
                                              </div>
                                              <h4 class="content-title"><a href="#">2ALSY-INPHB</a></h4>
                                              <div class="des">
                                                  <p> C'est une section estudiantine de l'inp-hb de yamoussoukro en cote d'ivoire.</p>
                                              </div>
                                              <div class="link-holder">
                                                  <a class="link-more" href="#">EN SAVOIR PLUS</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6">
                                      <div class="col-wrap">
                                          <div class="ico-box bg-gray-light dark-hover">
                                              <div class="icon">
                                                  <img class="icon-size" src="Logo 2ALSY.png">
                                              </div>
                                              <h4 class="content-title"><a href="#">2ALSY-BOUAKE</a></h4>
                                              <div class="des">
                                                  <p>Cette section regroupe tous les AS de la ville de BOUAKE en COTE D'IVOIRE.</p>
                                              </div>
                                              <div class="link-holder">
                                                  <a class="link-more" href="#">EN SAVOIR PLUS</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6">
                                      <div class="col-wrap">
                                          <div class="ico-box bg-gray-light dark-hover">
                                              <div class="icon">
                                                  <img class="icon-size" src="Logo 2ALSY.png">
                                              </div>
                                              <h4 class="content-title"><a href="#">2ALSY-ESATIC</a></h4>
                                              <div class="des">
                                                  <p>Il s'agit de la section estudiantine pour les etudiant d'esatic à ABIDJAN/Treichville. </p>
                                              </div>
                                              <div class="link-holder">
                                                  <a class="link-more" href="#">EN SAVOIR PLUS</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6">
                                      <div class="col-wrap">
                                          <div class="ico-box bg-gray-light dark-hover">
                                              <div class="icon">
                                                  <img class="icon-size" src="Logo 2ALSY.png">
                                              </div>
                                              <h4 class="content-title"><a href="#">2ALSY-CANADA</a></h4>
                                              <div class="des">
                                                  <p>POUR la Section CANADA, elle regroupe tous nos membre qui reside au CANADA.</p>
                                              </div>
                                              <div class="link-holder">
                                                  <a class="link-more" href="#">EN SAVOIR PLUS</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6">
                                      <div class="col-wrap">
                                          <div class="ico-box bg-gray-light dark-hover">
                                              <div class="icon">
                                                  <img class="icon-size" src="Logo 2ALSY.png">
                                              </div>
                                              <h4 class="content-title"><a href="#">2ALSY-USA</a></h4>
                                              <div class="des">
                                                  <p>Cette section reunis l'enssemble des membres vivants dans les 50 ETATS des états unis d'amérique.</p>
                                              </div>
                                              <div class="link-holder">
                                                  <a class="link-more" href="#">EN SAVOIR PLUS</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                      <div class="col-md-12 ml-6 text-center">
                      <a class="btn btn-primary has-radius-small" href="#">Plus de sections</a>
                      </div>

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
$(document).ready(function(){
    $('[data-toggle="tab"]').click(function(){
        $(this).tab('show');
    });
});
</script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>