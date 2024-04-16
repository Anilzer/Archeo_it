@extends('./layouts/app')

@section('page-content')

<div class="container mb-5">
    <h1 class="text-center mb-6">Nos stages pour enfants et adultes</h1>
    <p class="text-center"><em>Retrouvez ici les opportunités de stages que nous offrons à tout types de catégories de personnes</em></p>
    <div class="row mt-4">
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('img/s1.jpg') }}" class="card-img-top" alt="Image_du_stage">
                <div class="card-body">
                    <h5 class="card-title">Stage de découverte</h5>
                    <p class="card-text">Découvrez nos stages passionnants conçus spécialement pour les enfants. Des activités ludiques et éducatives les attendent.</p>
                    <p><i class="fas fa-map-marker-alt"></i> Caen</p>
                    <a href="#" class="btn btn-primary position-absolute" style="bottom: 10px; right: 10px;">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 position-relative">
                <img src="{{ asset('img/s2.jpg') }}" class="card-img-top" alt="Image_du_stage">
                <div class="card-body">
                    <h5 class="card-title">Stage d'exploration</h5>
                    <p class="card-text">Explorez nos stages pour adultes conçus pour les amateurs et les passionnés. Des opportunités uniques pour apprendre et s'épanouir.</p>
                    <p><i class="fas fa-map-marker-alt"></i> Nantes</p>
                    <a href="#" class="btn btn-primary position-absolute" style="bottom: 10px; right: 10px;">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 position-relative">
                <img src="{{ asset('img/s3.jpg') }}" class="card-img-top" alt="Image_du_stage">
                <div class="card-body">
                    <h5 class="card-title">Stage d'aventure</h5>
                    <p class="card-text">Participez à nos stages d'aventure pour toute la famille. Explorez la nature et apprenez de nouvelles compétences.</p>
                    <p><i class="fas fa-map-marker-alt"></i> Pau</p>
                    <a href="#" class="btn btn-primary position-absolute" style="bottom: 10px; right: 10px;">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('img/s4.jpg') }}" class="card-img-top" alt="Image_du_stage">
                <div class="card-body">
                    <h5 class="card-title">Stage de découverte</h5>
                    <p class="card-text">Découvrez nos stages passionnants conçus spécialement pour les enfants. Des activités ludiques et éducatives les attendent.</p>
                    <p><i class="fas fa-map-marker-alt"></i> Caen</p>
                    <a href="#" class="btn btn-primary position-absolute" style="bottom: 10px; right: 10px;">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 position-relative">
                <img src="{{ asset('img/s5.jpg') }}" class="card-img-top" alt="Image_du_stage">
                <div class="card-body">
                    <h5 class="card-title">Stage d'exploration</h5>
                    <p class="card-text">Explorez nos stages pour adultes conçus pour les amateurs et les passionnés. Des opportunités uniques pour apprendre et s'épanouir.</p>
                    <p><i class="fas fa-map-marker-alt"></i> Nantes</p>
                    <a href="#" class="btn btn-primary position-absolute" style="bottom: 10px; right: 10px;">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 position-relative">
                <img src="{{ asset('img/s6.png') }}" class="card-img-top" alt="Image_du_stage">
                <div class="card-body">
                    <h5 class="card-title">Stage d'aventure</h5>
                    <p class="card-text">Participez à nos stages d'aventure pour toute la famille. Explorez la nature et apprenez de nouvelles compétences.</p>
                    <p><i class="fas fa-map-marker-alt"></i> Pau</p>
                    <a href="#" class="btn btn-primary position-absolute" style="bottom: 10px; right: 10px;">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection