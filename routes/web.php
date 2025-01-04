<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\EtapeController;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\VoyageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("accueil");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/test-vite', function () {
    return view('test-vite');
})->name("test-vite");

Route::get('/home', function () {
    return view('dashboard');
})-> middleware('auth')->name("home") ;

Route::get('/dashboard', function () {
    return view('dashboard');
}) -> middleware('auth')->name("dashboard");
Route::resource('etape', EtapeController::class);

Route::resource('voyage', VoyageController::class);

Route::resource('avis', AvisController::class)-> middleware('auth');

Route::get('voyage/{voyage}/avis/create/{user}', [AvisController::class, 'create'])->name('avis.create');
Route::post('voyage/{voyage}/avis/{user}', [AvisController::class, 'store'])->name('avis.store');
Route::put('voyage/{voyage}/avis/{avis}', [AvisController::class, 'update'])->name('avis.update');
Route::delete('voyage/{voyage}/avis/{avis}', [AvisController::class, 'destroy'])->name('avis.destroy');


Route::resource('users', UserController::class);

Route::post('/etape/create/{voyage_id}', [EtapeController::class, 'store'])->name('etape.store');


Route::get('/etapes/create/{voyage_id}', [EtapeController::class, 'create'])->name('etape.create');
Route::get('/equipes', function () {
    $teamMembers = [
        'PEUVREL Noah - Taches effectuées : Création du logo, Motion Design, Montage',
        'DALMASSO Mathéo - Taches effectuées : Création du CRUD de la page d\'accueil',
        'LEPERS Sharleen - Taches effectuées : Création du scénario de la vidéo en anglais, Chartre Graphique, Moodboard',
        'CORNET Benjamin - Taches effectuées : Création du CRUD pour les commentaires',
        'DELTOUR Léa - Taches effectuées : Rédaction du voyage, Présentation du projet',
        'LESTRIEZ Jade - Taches effectuées : Maquette figma, CSS, Javascript',
        'CAILLIERET Simon - Taches effectuées : Création du CRUD pour les avis',
        'MOREL Mathias - Taches effectuées : Création du CRUD pour les profils (users) / creation du mcd et mld avec puml',
    ];
    return view('equipes', compact('teamMembers'));
})->name('equipes');

Route::get('/video', function () {
    return view('video');
})->name('video');

Route::post('voyage/{voyage}/like', [VoyageController::class, 'like'])-> middleware('auth')->name('voyage.like');
