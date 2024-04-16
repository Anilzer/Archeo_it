@extends('./layouts/app')

@section('page-content')
<div class="container mt-5">
    <h1 class="text-center mb-6">Revues Téléchargeables</h1>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="revue text-center">
                <img src="{{ asset('img/l1.jpg') }}" alt="Revues 1" class="img-fluid">
                <h3>Le château d'Alone-Toulongeon en Autunois</h3>
                <p>Auteur: <b>Bernard Gueugnon</b></p>
                <p>Année de Publication: 1984</p>
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-download"></i> Télécharger
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="revue text-center">
                <img src="{{ asset('img/l2.jpg') }}" alt="Revues 2" class="img-fluid">
                <h3>Architecture militaire dans l'empire sassanide</h3>
                <p>Auteur: <b>Jean-Claude Voisin</b></p>
                <p>Année de Publication: 2001</p>
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-download"></i> Télécharger
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="revue text-center">
                <img src="{{ asset('img/l3.jpg') }}" alt="Revues 3" class="img-fluid" style="height: 180px;">
                <h3>Les guerres de Religion en Autunois et Charolais</h3>
                <p>Auteurs : <b>Louis Lagrost & Robert Chevrot</b></p>
                <p>Année de Publication: 1990</p>
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-download"></i> Télécharger
                </a>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-4">
            <div class="revue text-center">
                <img src="{{ asset('img/l1.jpg') }}" alt="Revues 1" class="img-fluid">
                <h3>Le château d'Alone-Toulongeon en Autunois</h3>
                <p>Auteur: <b>Bernard Gueugnon</b></p>
                <p>Année de Publication: 1984</p>
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-download"></i> Télécharger
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="revue text-center">
                <img src="{{ asset('img/l2.jpg') }}" alt="Revues 2" class="img-fluid">
                <h3>Architecture militaire dans l'empire sassanide</h3>
                <p>Auteur: <b>Jean-Claude Voisin</b></p>
                <p>Année de Publication: 2001</p>
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-download"></i> Télécharger
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="revue text-center">
                <img src="{{ asset('img/l3.jpg') }}" alt="Revues 3" class="img-fluid" style="height: 180px;">
                <h3>Les guerres de Religion en Autunois et Charolais</h3>
                <p>Auteurs : <b>Louis Lagrost & Robert Chevrot</b></p>
                <p>Année de Publication: 1990</p>
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-download"></i> Télécharger
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
