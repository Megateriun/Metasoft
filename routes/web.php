<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
/* 
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

/*
Contexto:
las primeras '' es como se va a llamar la ruta, lo que esta dentro de [] es la ruta del controlador
los segundos '' es la funcion que enruta a la vista y el tercer

*/

Route::controller(HomeController::class)->group(function(){

Route::get('/home','home')->name('home'); // Vista caundo se inicia sesion
Route::get('/','index')->name('index');   

});

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login'); // lo que esta en el name es el nombre de la ruta que se va a usar en los archivos

Route::get('/profile/{id}', [App\Http\Controllers\UserController::class, 'profile'])->name('profile.user'); // Vista del perfil del usuario

Route::get('/form', [App\Http\Controllers\FormController::class, 'form'])->name('form'); // Vista del formulario
Route::post('/form', [App\Http\Controllers\FormController::class, 'store'])->name('form.store'); // para recolectar los datos del formulario