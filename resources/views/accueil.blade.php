@extends('./layouts/app')

@section('page-content')

<div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <div class="carousel-overlay"></div>**
            <img src="{{ asset('img/car_1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-white">
                <h5>Archéo-IT, l’aventure des embarcations archéologiques</h5>
                <p>Le Musée d'histoire de Lyon et l'Inrap proposent une journée d’étude autour de 
                    la pirogue-vivier LSG 15, découverte en 2003 par l'Inrap lors des fouilles du parking Saint-Georges à Lyon</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <div class="carousel-overlay"></div>
            <img src="{{ asset('img/car_2.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-white">
                <h5>La Terre en héritage, du Néolithique à nous</h5>
                <p>Cette exposition, réalisée par le musée des Confluences à Lyon et coproduite avec l'Inrap,
                    propose d’observer les grands défis environnementaux.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-overlay"></div>
            <img src="{{ asset('img/car_3.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-white">
                <h5>Exposition des fossiles des fouilles archéologique à Amiens</h5>
                <p>L’archéologie sera à l’honneur dimanche 24 mars 2024 à Gourjade avec le « Forum de l’Archéologie » pour une journée entièrement dédiée à tous les curieux</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-auto">
            <p class="fw-bold display-6">Qui sommes nous ?</p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/f1.jpg') }}" class="img-fluid" alt="Image">
        </div>
        <div class="col-md-6">
            <p class="text-justify"><b>Archeo-IT</b> est une association basée à Orléans qui a vu le jour dans le courant du mois d'Avril 2024. 
            Elle est dédiée à la recherche historique et archéologique, 
                ainsi qu'à la préservation et à la valorisation du patrimoine archéologique français. 
                Notre mission principale est de répertorier, étudier et documenter les sites fortifiés et les vestiges archéologiques 
                de la région. Nous nous engageons à réaliser un inventaire exhaustif de ces sites, en utilisant des méthodes de
                 prospection au sol et aérienne, dans le but de publier une carte archéologique détaillée de quelques coins du territoire 
                 français.
            </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 order-md-1">
            <p class="text-justify">
            En plus de nos efforts pour sauvegarder et conserver ces sites et objets archéologiques, conformément à
             la législation en vigueur, nous nous engageons également à sensibiliser le public à l'importance de ce patrimoine. 
             Nous organisons des animations, des expositions,
             des publications et des colloques scientifiques afin de partager nos découvertes et de susciter
              l'intérêt pour l'archéologie. Les activités d'<b>Archeo IT</b> sont diverses et dynamiques. 
              Nous participons activement à des fouilles archéologiques à travers toute la France et 
              mettons à disposition nos experts pour collaborer avec l'<b>INRAP</b>. De plus, nous organisons des conférences 
              mensuelles sur des sujets variés, éditons des revues scientifiques élaborées par nos membres et proposons
               des stages d'initiation à l'archéologie pour tous les passionnés, jeunes et moins jeunes.</p>
        </div>
        <div class="col-md-6 order-md-2">
            <img src="{{ asset('img/f2.jpg') }}" class="img-fluid" alt="Image">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/f3.jpg') }}" class="img-fluid" alt="Image">
        </div>
        <div class="col-md-6">
            <p class="text-justify">En résumé, <b>Archeo-IT</b> s'engage à promouvoir la recherche, 
            la préservation et la diffusion des connaissances sur le patrimoine 
            archéologique de Bourgogne, tout en offrant des opportunités
             d'engagement et d'apprentissage à ses membres et au grand public.
            </p>
        </div>
    </div>
</div>
<div class="tab-news mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#featured">Activités récentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#popular">Activités populaires</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="featured" class="container tab-pane active">
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{ asset('img/n1.jpg') }}" />
                            </div>
                            <div class="tn-title">
                                <a href="">Festival du film d’archéologie d’Amiens</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{ asset('img/n2.jpg') }}" />
                            </div>
                            <div class="tn-title">
                                <a href="">Présentation de l'ouvrage "L'hôtel des ducs de Bourgogne, puis logis du roi à Dijon"</a>
                            </div>
                        </div>
                    </div>
                    <div id="popular" class="container tab-pane">
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{ asset('img/n3.jpg') }}" />
                            </div>
                            <div class="tn-title">
                                <a href="">Visite du château de Brandon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mn-list">
                    <h2>Voir plus</h2>
                    <ul>
                        <li><a href="">Les Premiers Gestes de l’Homme : de l’usuel des premiers outils à l’esthétique des premières élites</a></li>
                        <li><a href="">La Préhistoire et l'Histoire du tatouage</a></li>
                        <li><a href="">La poterie néolithique</a></li>
                        <li><a href="">Les parures préhistoriques</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    // Sélectionnez tous les liens d'onglet
    var tabLinks = document.querySelectorAll('.nav-link');

    // Ajoutez un écouteur d'événement clic à chaque lien d'onglet
    tabLinks.forEach(function(tabLink) {
        tabLink.addEventListener('click', function(event) {
            // Empêcher le comportement par défaut du lien (défilement de la page)
            event.preventDefault();
            // Supprimez la classe active de tous les conteneurs d'onglets
            document.querySelectorAll('.tab-pane').forEach(function(tabPane) {
                tabPane.classList.remove('active');
            });

            // Récupérez l'ID de l'onglet cible à partir de l'attribut href
            var targetTabId = tabLink.getAttribute('href').substr(1);

            // Ajoutez la classe active au conteneur d'onglet correspondant
            document.getElementById(targetTabId).classList.add('active');

            // Supprimez la classe active de tous les liens d'onglet
            tabLinks.forEach(function(link) {
                link.classList.remove('active');
            });
            // Ajoutez la classe active au lien d'onglet actuellement cliqué
            tabLink.classList.add('active');
        });
    });
</script>

@endsection