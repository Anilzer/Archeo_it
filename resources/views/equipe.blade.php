@extends('./layouts/app')

@section('page-content')

<div class="team-grid">
    <div class="container mb-6">
        <div class="intro">
            <h2 class="text-center">Rencontrez notre équipe</h2>
            <p class="text-center">Une équipe dynamique de jeunes chercheurs passionée</p>
        </div>
        <div class="row people d-flex justify-content-center">
            <div class="col-md-4 col-lg-3 item">
                <div class="box">
                    <img src="{{ asset('img/p1.jpeg') }}" style="width: 100%; height: 100%;" />
                    <div class="cover">
                        <h3 class="name">Andil ABAYOMI</h3>
                        <p class="title">Fondateur</p>
                        <div class="social"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 item">
                <div class="box">
                    <img src="{{ asset('img/p2.jpg') }}" style="width: 100%; height: 100%;" />
                    <div class="cover">
                        <h3 class="name">Salwane ADESSOKPE</h3>
                        <p class="title">Directeur Général</p>
                        <div class="social"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 item">
                <div class="box">
                    <img src="{{ asset('img/p3.jpg') }}" style="width: 100%; height: 100%;" />
                    <div class="cover">
                        <h3 class="name">Dayane AGNIDE</h3>
                        <p class="title">Directeur Général Adjoint</p>
                        <div class="social"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row people d-flex justify-content-center">
            <div class="col-md-4 col-lg-3 item">
                <div class="box">
                    <img src="{{ asset('img/p4.jpg') }}" style="width: 100%; height: 100%;" />
                    <div class="cover">
                        <h3 class="name">Eden TODAN</h3>
                        <p class="title">Trésorier</p>
                        <div class="social"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 item">
                <div class="box">
                    <img src="{{ asset('img/p5.jpg') }}" style="width: 100%; height: 100%;" />
                    <div class="cover">
                        <h3 class="name">Wadjid ASSANI</h3>
                        <p class="title">Responsable des événements</p>
                        <div class="social"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 item">
                <div class="box">
                    <img src="{{ asset('img/p6.jpg') }}" style="width: 100%; height: 100%;" />
                    <div class="cover">
                        <h3 class="name">Gérald KIKI</h3>
                        <p class="title">Sécrétaire</p>
                        <div class="social"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row people d-flex justify-content-center">
            <div class="col-md-4 col-lg-3 item">
                <div class="box">
                    <img src="{{ asset('img/p7.jpg') }}" style="width: 100%; height: 100%;" />
                    <div class="cover">
                        <h3 class="name">Gael EDAH</h3>
                        <p class="title">Responsable des communications</p>
                        <div class="social"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 item">
                <div class="box">
                    <img src="{{ asset('img/p8.jpg') }}" style="width: 100%; height: 100%;" />
                    <div class="cover">
                        <h3 class="name">Anas BADAROU</h3>
                        <p class="title">Responsable de la formation et de l'éducation</p>
                        <div class="social"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 item">
                <div class="box">
                    <img src="{{ asset('img/p9.jpg') }}" style="width: 100%; height: 100%;" />
                    <div class="cover">
                        <h3 class="name">Aulduce BYLL-CATARIA</h3>
                        <p class="title">Responsable de la formation et de l'éducation</p>
                        <div class="social"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection