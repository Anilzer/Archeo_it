@extends('./layouts/app')

@section('page-content')

<h1 class="text-center mb-6">Liste de ceux qui nous ont contactés</h1><br>
    <div class="container">
        <table class="table table-bordered mx-auto">
            <thead>
                <tr>
                    <th class="px-4 text-center">Noms</th>
                    <th class="px-4 text-center">Prénoms</th>
                    <th class="px-4 text-center">Mails</th>
                    <th class="px-4 text-center">Objets</th>
                    <th class="px-4 text-center">Messages</th>
                    <th class="px-4 text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td class="text-center">{{ $contact->nom }}</td>
                        <td class="text-center">{{ $contact->prenom }}</td>
                        <td class="text-center">{{ $contact->mail }}</td>
                        <td class="text-center">{{ $contact->objet }}</td>
                        <td class="text-center">{{ $contact->message }}</td>
                        <td class="text-center">
                            <div class="btn btn-group">
                                <form method="POST" action="{{ route('contact.delete', $contact->idContact) }}">
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
                <a href="{{ route('list-stage') }}" class="btn btn-primary">Retour au liste des demandes de stages</a>
            </div>
        </div>
    </div>
    @endsection