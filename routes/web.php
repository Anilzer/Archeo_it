<?php
use App\Http\Controllers\ArcheoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', [ArcheoController::class, 'index'])->name('accueil');

Route::get('/stage', [ArcheoController::class, 'stage'])->name('stage');

Route::get('/site', [ArcheoController::class, 'site'])->name('site');

Route::get('/conference', [ArcheoController::class, 'conference'])->name('conference');

Route::get('/revue', [ArcheoController::class, 'revue'])->name('revue');

Route::get('/equipe', [ArcheoController::class, 'equipe'])->name('equipe');

Route::get('/formulaire', [ArcheoController::class, 'form'])->name('formulaire');

Route::get('/formulairestore', [ArcheoController::class, 'formstore'])->name('formulaire.store');

Route::get('/inscription', [ArcheoController::class, 'inscription'])->name('inscription');

Route::post('/inscriptionstore', [ArcheoController::class,'store'])->name('inscription.store');

Route::get('/list-stage',[ArcheoController::class, 'afficherstages'])->name('list-stage');

Route::post('/inscription/{id}', [ArcheoController::class, 'deletestages'])->name('inscription.delete');

Route::get('/list-contact',[ArcheoController::class, 'affichercontacts'])->name('list-contact');

Route::get('/contact/{id}',[ArcheoController::class, 'deletecontacts'])->name('contact.delete');