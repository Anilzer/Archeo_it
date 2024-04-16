<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Archeo-IT</title>
    <link rel="stylesheet" href="linkToCSS" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-4.7" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-marron fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" width="70" height="60" class="d-inline-block align-text-top">
                    <span>Archeo-IT</span>
                </a>

                <ul class="navbar-nv justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link custom-text-color" href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="link custom-text-color" href="{{ route('site') }}">Site de Fouille</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link custom-text-color dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Stages & Conférences
                        </a>
                        <ul class="dropdown-menu custom-text-color">
                            <li><a class="dropdown-item" href="{{ route('stage') }}">Stages pour enfants et adultes</a></li>
                            <li><a class="dropdown-item" href="{{ route('conference') }}">Conférences</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('revue') }}">Diverses revues téléchargeables</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="link custom-text-color" href="{{ route('equipe') }}">Notre équipe</a>
                    </li>
                </ul>
                <form id="contact-form" class="d-flex" role="contact">
                    <button class="btn btn-outline-custom" type="submit">Nous Contacter</button>
                </form>
                <script>
                    $(document).ready(function() {
                        // Sélectionnez le formulaire par son ID
                        $('#contact-form').submit(function(e) {
                            // Empêcher le formulaire de se soumettre normalement
                            e.preventDefault();
                            // Rediriger l'utilisateur vers la vue formulaire.blade.php
                            window.location.href = "{{ route('formulaire') }}";
                        });
                    });
                </script>

            </div>
        </nav>
    </div>

    @yield('page-content')

    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">ARCHEO-IT</h3>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>66 Avenue de la Mouillère, 45000 Orléans</p>
                            <p><i class="fa fa-envelope"></i>archeoit@gmail.com</p>
                            <p><i class="fa fa-phone"></i>+33 7 44 19 18 67</p>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                </div>
                <div class="col-lg-3 col-md-6">
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Liens utiles</h3>
                        <ul>
                            <li><a href="{{ route('site') }}">Sites de Fouilles archéologiques</a></li>
                            <li><a href="{{ route('revue') }}">Revues Archéologiques</a></li>
                            <li><a href="{{ route('inscription') }}">S'inscrire à un stage</a></li>
                            <li><a href="{{ route('formulaire') }}">Contactez-Nous</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- Footer End -->

            <!-- Back to Top -->
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</body>

</html>