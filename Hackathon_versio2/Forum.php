<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Forum</title>
    <style>
        body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        .inner-wrapper {
            position: relative;
            height: calc(100vh - 3.5rem);
            transition: transform 0.3s;
        }

        @media (min-width: 992px) {
            .sticky-navbar .inner-wrapper {
                height: calc(100vh - 3.5rem - 48px);
            }
        }

        .inner-main,
        .inner-sidebar {
            position: absolute;
            top: 0;
            bottom: 0;
            display: flex;
            flex-direction: column;
        }

        .inner-sidebar {
            left: 0;
            width: 235px;
            border-right: 1px solid #cbd5e0;
            background-color: #fff;
            z-index: 1;
        }

        .inner-main {
            right: 0;
            left: 235px;
        }

        .inner-main-footer,
        .inner-main-header,
        .inner-sidebar-footer,
        .inner-sidebar-header {
            height: 3.5rem;
            border-bottom: 1px solid #cbd5e0;
            display: flex;
            align-items: center;
            padding: 0 1rem;
            flex-shrink: 0;
        }

        .inner-main-body,
        .inner-sidebar-body {
            padding: 1rem;
            overflow-y: auto;
            position: relative;
            flex: 1 1 auto;
        }

        .inner-main-body .sticky-top,
        .inner-sidebar-body .sticky-top {
            z-index: 999;
        }

        .inner-main-footer,
        .inner-main-header {
            background-color: #fff;
        }

        .inner-main-footer,
        .inner-sidebar-footer {
            border-top: 1px solid #cbd5e0;
            border-bottom: 0;
            height: auto;
            min-height: 3.5rem;
        }

        @media (max-width: 767.98px) {
            .inner-sidebar {
                left: -235px;
            }

            .inner-main {
                left: 0;
            }

            .inner-expand .main-body {
                overflow: hidden;
            }

            .inner-expand .inner-wrapper {
                transform: translate3d(235px, 0, 0);
            }
        }

        .nav .show>.nav-link.nav-link-faded,
        .nav-link.nav-link-faded.active,
        .nav-link.nav-link-faded:active,
        .nav-pills .nav-link.nav-link-faded.active,
        .navbar-nav .show>.nav-link.nav-link-faded {
            color: #3367b5;
            background-color: #c9d8f0;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #467bcb;
        }

        .nav-link.has-icon {
            display: flex;
            align-items: center;
        }

        .nav-link.active {
            color: #467bcb;
        }

        .nav-pills .nav-link {
            border-radius: .25rem;
        }

        .nav-link {
            color: #4a5568;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="main-body p-0">
            <div class="inner-wrapper">
                <!-- Inner sidebar -->
                <div class="inner-sidebar">
                    <!-- Inner sidebar header -->
                    <div class="inner-sidebar-header justify-content-center">
                        <button class="btn btn-primary has-icon btn-block" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            NEW DISCUSSION
                        </button>
                    </div>
                    <!-- /Inner sidebar header -->

                    <!-- Inner sidebar body -->
                    <div class="inner-sidebar-body p-0">
                        <div class="p-3 h-100" data-simplebar="init">
                            <div class="simplebar-wrapper" style="margin: -16px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 16px;">
                                                <nav class="nav nav-pills nav-gap-y-1 flex-column">
                                                    <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon active">All Threads</a>
                                                    <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">Demande d'aide</a>
                                                    <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">Opportunités</a>
                                                    <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">Annonces</a>
                                                    <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">Le Lycée</a>
                                                    <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">No replies yet</a>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: 234px; height: 292px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar" style="height: 151px; display: block; transform: translate3d(0px, 0px, 0px);"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /Inner sidebar body -->
                </div>
                <!-- /Inner sidebar -->

                <!-- Inner main -->
                <div class="inner-main">
                    <!-- Inner main header -->
                    <div class="inner-main-header">
                        <a class="nav-link nav-icon rounded-circle nav-link-faded mr-3 d-md-none" href="#" data-toggle="inner-sidebar"><i class="material-icons">arrow_forward_ios</i></a>
                        <select class="form-select custom-select custom-select-sm w-auto mr-1" aria-label="Default select example">
                            <option selected="">Latest</option>
                            <option value="1">Popular</option>
                            <option value="3">Solved</option>
                            <option value="3">Unsolved</option>
                            <option value="3">No Replies Yet</option>
                        </select>
                        <span class="input-icon input-icon-sm ml-auto w-auto ms-auto">
                            <input type="text" class="form-control form-control-sm bg-gray-200 border-gray-200 shadow-none mb-4 mt-4" placeholder="Search forum" />
                        </span>
                    </div>
                    <!-- /Inner main header -->

                    <!-- Inner main body -->

                    <!-- Forum List -->
                    <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                        <div class="card mb-2">
                            <div class="card-body p-2 p-sm-3">
                                <div class="row media forum-item">
                                    <div class="col-1">
                                        <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                    </div>
                                    <div class="col-9">
                                        <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">Realtime fetching data</a></h6>
                                        <p class="text-secondary">
                                            lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                        </p>
                                        <p class="text-muted"><a href="javascript:void(0)">drewdan</a> replied <span class="text-secondary font-weight-bold">13 minutes ago</span></p>
                                    </div>
                                    <div class="col-2 text-muted small text-center align-self-center">
                                        <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                        <span><i class="far fa-comment ml-2"></i> 3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-body p-2 p-sm-3">
                                <div class="row media forum-item">
                                    <div class="col-1">
                                        <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="Images/téléchargement.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                    </div>
                                    <div class="col-9">
                                        <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">Realtime fetching data</a></h6>
                                        <p class="text-secondary">
                                            lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                        </p>
                                        <p class="text-muted"><a href="javascript:void(0)">drewdan</a> replied <span class="text-secondary font-weight-bold">13 minutes ago</span></p>
                                    </div>
                                    <div class="col-2 text-muted small text-center align-self-center">
                                        <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                        <span><i class="far fa-comment ml-2"></i> 3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-body p-2 p-sm-3">
                                <div class="row media forum-item">
                                    <div class="col-1">
                                        <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                    </div>
                                    <div class="col-9">
                                        <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">Realtime fetching data</a></h6>
                                        <p class="text-secondary">
                                            lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                        </p>
                                        <p class="text-muted"><a href="javascript:void(0)">drewdan</a> replied <span class="text-secondary font-weight-bold">13 minutes ago</span></p>
                                    </div>
                                    <div class="col-2 text-muted small text-center align-self-center">
                                        <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                        <span><i class="far fa-comment ml-2"></i> 3</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="pagination pagination-sm pagination-circle justify-content-center mb-0">
                            <li class="page-item">
                                <span class="page-link has-icon"><i class="material-icons">Précédent</i></span>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item active"><span class="page-link">2</span></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item">
                                <a class="page-link has-icon" href="javascript:void(0)"><i class="material-icons">Suivant</i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Forum List -->

                    <!-- Forum Detail -->
                    <div class="inner-main-body p-2 p-sm-3 collapse forum-content">
                        <a href="#" class="btn btn-light btn-sm mb-3 has-icon" data-toggle="collapse" data-target=".forum-content"><i class="fa fa-arrow-left mr-2"></i>Back</a>
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="media forum-item">
                                    <a href="javascript:void(0)" class="card-link">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle" width="50" alt="User" />
                                        <small class="d-block text-center text-muted">Newbie</small>
                                    </a>
                                    <div class="media-body ml-3">
                                        <a href="javascript:void(0)" class="text-secondary">Mokrani</a>
                                        <small class="text-muted ml-2">1 hour ago</small>
                                        <h5 class="mt-1">Realtime fetching data</h5>
                                        <div class="mt-3 font-size-sm">
                                            <p>Hellooo :)</p>
                                            <p>
                                                I'm newbie with laravel and i want to fetch data from database in realtime for my dashboard anaytics and i found a solution with ajax but it dosen't work if any one have a simple solution it will be
                                                helpful
                                            </p>
                                            <p>Thank</p>
                                        </div>
                                    </div>
                                    <div class="text-muted small text-center">
                                        <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                        <span><i class="far fa-comment ml-2"></i> 3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="media forum-item">
                                    <a href="javascript:void(0)" class="card-link">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle" width="50" alt="User" />
                                        <small class="d-block text-center text-muted">Pro</small>
                                    </a>
                                    <div class="media-body ml-3">
                                        <a href="javascript:void(0)" class="text-secondary">drewdan</a>
                                        <small class="text-muted ml-2">1 hour ago</small>
                                        <div class="mt-3 font-size-sm">
                                            <p>What exactly doesn't work with your ajax calls?</p>
                                            <p>Also, WebSockets are a great solution for realtime data on a dashboard. Laravel offers this out of the box using broadcasting</p>
                                        </div>
                                        <button class="btn btn-xs text-muted has-icon"><i class="fa fa-heart" aria-hidden="true"></i>1</button>
                                        <a href="javascript:void(0)" class="text-muted small">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Forum Detail -->

                    <!-- /Inner main body -->
                </div>
                <!-- /Inner main -->
            </div>

            <!-- New Thread Modal -->
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Nouvelle Discussion</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="myForm" action="#" method="post">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Titre</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Entrez le titre" max="200">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Votre message</label>
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="button" onclick="submitForm()" class="btn btn-primary">Poster</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function submitForm() {
            document.getElementById('myForm').submit();
        }
    </script>
</body>

</html>