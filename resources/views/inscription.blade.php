@extends('./layouts/app')

@section('page-content')

<div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mb-6">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card mb-5">
                <div class="card-body">
                    <form action="{{ route('inscription.store') }}" method="POST" class="form-product">
                        @csrf
                        <h2>S'inscrire à un stage</h2>
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control mt-1" placeholder="Nom" name="nom">
                        </div>
        
                        <div class="form-group">
                            <label for="Prénom">Prénom</label>
                            <input type="text" class="form-control mt-1" placeholder="Prénom" name="prenom">
                        </div>

                        <div class="form-group">
                            <label for="datenais">Date de naissance</label>
                            <input type="text" class="form-control mt-1" placeholder="Date de naissance" name="datenais" id="datepicker">
                        </div>

                        <div class="form-group">
                            <label for="">Stage</label>
                            <select class="form-control" name="idStage">
                                @foreach ($stages as $stage)
                                    <option value="{{ $stage->idStage }}">{{ $stage->libelle }}</option>
                                @endforeach
                            </select>
                        </div>                        
                        <button type="submit" class="btn btn-primary mt-3">Soumettre</button>
                        <button type="reset" class="btn btn-danger mt-3">Effacer</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<!-- Initialiser le Datepicker -->
<script>
    $(document).ready(function(){
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd', // Format de la date
            autoclose: true, // Fermeture automatique du calendrier après la sélection
            todayHighlight: true // Met en surbrillance la date sélectionnée
        });
    });
</script>
@endsection