@extends('./layouts/app')

@section('page-content')

<!-- Contact Start -->
<div class="contact">
    <div class="container mb-6">
        <div class="row align-items-center">
            <div class="col-md-6">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <div class="contact-form">
                    <form action="{{ route('formulaire.store') }}" method="GET">
                    @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-1">
                                <input type="text" class="form-control" placeholder="Votre nom" name="nom" />
                            </div>
                            <div class="form-group col-md-6 mb-1">
                                <input type="text" class="form-control" placeholder="Votre prénom" name="prenom"/>
                            </div>
                            <div class="form-group col-md-6 mb-1">
                                <input type="email" class="form-control" placeholder="votre email" name="mail"/>
                            </div>
                        </div>
                        <div class="form-group mb-1">
                            <input type="text" class="form-control" placeholder="Objet" name="objet"/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control mb-2" rows="7" placeholder="Message" name="message"></textarea>
                        </div>
                        <div><button class="btn btn-primary" type="submit">Envoyer</button></div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-info">
                    <h3>Contactez-Nous</h3>
                    <p>
                        N'hésitez pas à nous contacter pour toute demande de renseignements sur ce que nous faisons, pour fixer un rendez-vous dans notre association 
                        ou pour toute autre question. Nous sommes là pour vous aider et répondre à vos besoins. <br>

                        Nous nous engageons à vous faire un retour dans les plus brefs délais. <br><br>
                       <em> Votre satisfaction est notre priorité, et nous sommes disponibles pour vous accompagner à chaque étape. Merci de nous faire confiance et de nous donner l'opportunité de vous aider.</em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<div class="container mb-2">
    <h4 style="text-align: center;">Voudriez-vous inscrire à un stage ? cliquez <a href="{{ route('inscription') }}">ici</a></h4>
</div>

@endsection