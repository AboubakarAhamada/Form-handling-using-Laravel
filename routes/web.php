<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('{n}', function($n) {
    return 'Je suis la page ' . $n . ' !';
})->where('n','[1-3]');

Route::get('view1',function(){
    return view('view1');
});

/*
 * Le renvoi des views à partir de ce fichier des routes n'est pas la bonne manière
 * Il faut plutot rediriger la requete vers le controlleur qui se chargera
 * de rendre le view à l'utilisateur
 * 
 * L'exemple ci-dessous redirige la requette 'localhost:8000/home' vers le 
 * controleur 'WelcomeController' qui va rendre la view
 */
Route::get('home', [WelcomeController::class, 'showHomePage']);

Route::get('user', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);

Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);

