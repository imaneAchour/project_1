<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Welcome page</title>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('style/style.css') }}" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">

                <h2 style="color: white;">GetJob</h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="GetJob/login">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="/register.html">Registration</a></li>
                        <li class="nav-item dropdown">
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Bonjour Dans Notre site</h1>
                            <p class="lead fw-normal text-white-50 mb-4">Vous avez un diplome et vous ne travaillez pas
                                Notre site est le bon choix!</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Commencons</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                    </div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h2 class="fw-bolder mb-0">Commencez par nos services</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="row gx-5 row-cols-1 row-cols-md-2">
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                                    <i class="bi bi-collection"></i>
                                </div>
                                <h2 class="h5">Postuler?</h2>
                                <p class="mb-0">Vous Pouvez Postuler a des postes de travails</p>
                            </div>
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                        class="bi bi-building"></i></div>
                                <h2 class="h5">Vous etes une entreprise?</h2>
                                <p class="mb-0">Vous pouvez Creer votre propre poste de travail afin de trouver le
                                    candidats ideal</p>
                            </div>
                            <div class="col mb-5 mb-md-0 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                        class="bi bi-toggles2"></i></div>
                                <h2 class="h5">Avez vous trouver le travail de reve?</h2>
                                <p class="mb-0">Chercher un travail selon votre choix et vos competences </p>
                            </div>
                            <div class="col h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                        class="bi bi-toggles2"></i></div>
                                <h2 class="h5">Trouver l'employé ideal pour votre poste </h2>
                                <p class="mb-0">Choisissez le candidats dans un liste qui s'affichera dans votre
                                    espace</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial section-->
        <div class="py-5 bg-light">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-10 col-xl-7">
                        <div class="text-center">
                            <div class="fs-4 mb-4 fst-italic">"Get Your Job"</div>
                            <div class="d-flex align-items-center justify-content-center">
                                <p>Notre site pour objectif de facilité la recherche du travail, vous pouver trouver
                                    tous type de travail quelque soit votre diplome.Soyez la bien venue</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog preview section-->
        <section class="py-5">
            <div class="container px-5 my-5" id="!">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder">Nos Services</h2>
                            <p class="lead fw-normal text-muted mb-5">Voici nos services</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('images/photo1.png') }}" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Candidat</div>
                                <h5 class="card-title mb-3">Postuler a un travail</h5>
                                <p class="card-text mb-0">Vous pouver chercher selon le choix de l'entreprise ou du
                                    grade ou bien par date de pubication.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('images/photo2.png') }}" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Gestionnaire</div>
                                <h5 class="card-title mb-3">Selectionner votre candidat</h5></a>
                                <p class="card-text mb-0">Choisissez votre candidat pour le poste que vous avez
                                    publier,vous pouver egalement conculter les informations des candidats.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('images/photo3.png') }}" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Gestionnaire</div>
                                <h5 class="card-title mb-3">Creer Votre ropre poste</h5>
                                <p class="card-text mb-0">Affiche le poste selon le besoin de votre entreprise,
                                    quelques soit le diplome ou le competence que vous chercher dans le cndidat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Call to action-->
                <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                    <div
                        class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                        <div class="mb-4 mb-xl-0">
                            <div class="fs-3 fw-bold text-white">Contactez Nous</div>
                            <div class="text-white-50">Pour plus d'information contacter nous sur notre boite mail <a
                                    href="https://www.google.com/intl/fr/gmail/about/"
                                    style="color: white;">mail@gamil.com</a></div>
                        </div>
                        <div class="ms-xl-4">
                            <div class="input-group mb-2">
                                <p st></p>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
