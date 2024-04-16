<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Contact;
use App\Models\Stage;

class ArcheoController extends Controller
{
    public function index()
    {
        return view('accueil');
    }
    public function stage()
    {
        return view('stage');
    }
    public function site()
    {
        return view('site');
    }
    public function conference()
    {
        return view('conference');
    }
    public function revue()
    {
        return view('revue');
    }
    public function equipe()
    {
        return view('equipe');
    }
    public function form()
    {
        return view('formulaire');
    }
    public function formstore(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'mail' => 'required',
            'objet' => 'required',
            'message' => 'required',
        ]);

        // Enregistrement des données dans la base de données
        $contact = new Contact(); // Utilisez le modèle contact
        $contact->nom = $validatedData['nom'];
        $contact->prenom = $validatedData['prenom'];
        $contact->mail = $validatedData['mail'];
        $contact->objet = $validatedData['objet'];
        $contact->message = $validatedData['message'];
        $contact->save();

        // Redirection vers une page de confirmation ou autre
        return redirect()->route('formulaire')->with('success', 'Message envoyée avec succès !');
    }
    public function inscription()
    {
        $stages = Stage::all();
        return view('inscription', compact('stages'));
    }
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'datenais' => 'required',
            'idStage' => 'required',
        ]);

        // Enregistrement des données dans la base de données
        $inscription = new Inscription(); // Utilisez le modèle inscription
        $inscription->nom = $validatedData['nom'];
        $inscription->prenom = $validatedData['prenom'];
        $inscription->datenais = $validatedData['datenais'];
        $inscription->idStage = $validatedData['idStage'];
        $inscription->save();

        // Redirection vers une page de confirmation ou autre
        return redirect()->route('inscription')->with('success', 'Demande envoyée avec succès !');
    }
    public function afficherstages()
    {
        $inscriptions = Inscription::all();

        return view('list-stage', compact('inscriptions'));
    }
    public function deletestages($id)
    {
        // Supprimez l'œuvre en utilisant l'ID
        $inscription = Inscription::findOrFail($id);
        $inscription->delete();

        // Redirigez l'utilisateur vers la liste des œuvres ou une autre page de votre choix
        return redirect()->route('list-stage');
    }
    public function affichercontacts()
    {
        $contacts = Contact::all();

        return view('list-contact', compact('contacts'));
    }
    public function deletecontacts($id)
    {
        // Supprimez l'œuvre en utilisant l'ID
        $contact = Contact::findOrFail($id);
        $contact->delete();

        // Redirigez l'utilisateur vers la liste des œuvres ou une autre page de votre choix
        return redirect()->route('list-contact');
    }
}
