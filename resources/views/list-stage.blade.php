@extends('./layouts/app')

@section('page-content')

<h1 class="text-center mb-6">Liste des demandes de stages</h1><br>
    <div class="container">
        <table class="table table-bordered mx-auto">
            <thead>
                <tr>
                    <th class="px-4 text-center">Noms</th>
                    <th class="px-4 text-center">Prénoms</th>
                    <th class="px-4 text-center">Date de naissance</th>
                    <th class="px-4 text-center">Stages demandés</th>
                    <th class="px-4 text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inscriptions as $inscription)
                    <tr>
                        <td class="text-center">{{ $inscription->nom }}</td>
                        <td class="text-center">{{ $inscription->prenom }}</td>
                        <td class="text-center">{{ $inscription->datenais }}</td>
                        <td class="text-center">
                            @if (!empty($inscription->stage))
                                {{ $inscription->stage->libelle }}
                            @else
                                Stage non spécifié
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="btn btn-group">
                                <form method="POST" action="{{ route('inscription.delete', $inscription->idInscription) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>        
        </table>
        <div class="row">
            <div class="text-center mb-4">
                <a href="{{ route('list-contact') }}" class="btn btn-primary">Retour à la liste des contacts</a>
            </div>
        </div>
    </div>
    @endsection