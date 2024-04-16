@extends('./layouts/app')

@section('page-content')
<div class="container mt-5">
    <h1 class="text-center mb-6">Quelques conférences archéologiques tenues par Archéo-IT</h1>
    <p class="text-center"><em>Retrouvez ici quelques conférences que nous avonseu à présider</em></p>

    <div class="row">
        <div class="col-md-6">
            <div class="conference">
                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel" style="height: 300px;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/s10.jpg') }}" class="d-block w-100" alt="Conférence 1" style="height: 300px;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/s11.jpg') }}" class="d-block w-100" alt="Conférence 1" style="height: 300px;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="conference-info">
                    <h3>Conférence 1</h3>
                    <p>Thème: Découvertes récentes dans la vallée du Nil</p>
                    <p>Date: 08 Mars 2024</p>
                    <p>Lieu: Musée d'Archéologie, Paris</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="conference">
                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel" style="height: 300px;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/s13.jpg') }}" class="d-block w-100" alt="Conférence 1" style="height: 300px;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/s4.jpg') }}" class="d-block w-100" alt="Conférence 1" style="height: 300px;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="conference-info">
                    <h3>Conférence 2</h3>
                    <p>Thème: Les cimetières du haut Moyen Âge .</p>
                    <p>Date: 20 Mars 2024</p>
                    <p>Lieu: Musée d'Arts de Nantes, Nantes</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="conference">
                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel" style="height: 300px;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/s20.jpg') }}" class="d-block w-100" alt="Conférence 1" style="height: 300px;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/s19.jpg') }}" class="d-block w-100" alt="Conférence 1" style="height: 300px;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="conference-info">
                    <h3>Conférence 3</h3>
                    <p>Thème: L’azilien pyrénéen entre Garonne et Èbre</p>
                    <p>Date: 28 Mars 2024</p>
                    <p>Lieu: Parc Floral, Orléans</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="conference">
                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/s18.jpg') }}" class="d-block w-100" alt="Conférence 1" style="height: 300px;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/s1.jpg') }}" class="d-block w-100" alt="Conférence 1" style="height: 300px;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="conference-info">
                    <h3>Conférence 4</h3>
                    <p>Thème: Préhistoire des Pyrénées-Orientales</p>
                    <p>Date: 10 Avril 2024</p>
                    <p>Lieu: Parc de la Tête d'Or, Lyon</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection