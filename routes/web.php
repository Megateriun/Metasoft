<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ObjectController;
use App\Http\Controllers\AdminController;

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

/*
METODOS:
post: enviar datos de manera oculta
get: enviar datos por la ruta
put: para actualizar datos
*/

Route::controller(AdminController::class)->group(function(){ // rutas del administrador
    Route::get('/admin/objects','objects')->name('admin.objects');
    Route::get('/admin/transactions','transactions')->name('admin.transactions');
    Route::get('/admin/users','users')->name('admin.users');
});


Route::controller(HomeController::class)->group(function(){

Route::get('/','index')->name('index');
Route::get('/home','home')->name('home.user'); // Vista caundo se inicia sesion
Route::get('/home/admin','home_admin')->name('home.admin'); // Vista caundo se inicia sesion el admin
Route::put('/home/accept/{object}','button_accept')->name('accept.button'); // funcionalidad dde boton aceptar
Route::put('/home/reserve/{object}','button_reserve')->name('reserve.button'); // funcionalidad dde boton reservar
   
});

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login'); // lo que esta en el name es el nombre de la ruta que se va a usar en los archivos
Route::post('/login', [App\Http\Controllers\LoginController::class, 'store'])->name('login.store'); // lo que esta en el name es el nombre de la ruta que se va a usar en los archivos
Route::get('/login/destroy', [App\Http\Controllers\LoginController::class, 'destroy'])->name('destroy.user');

//Route::get('/home/{id}', [App\Http\Controllers\HomeController::class, 'home'])->name('home.user'); // Vista del perfil del usuario

Route::get('/form', [App\Http\Controllers\FormController::class, 'form'])->name('form'); // Vista del formulario
Route::post('/form', [App\Http\Controllers\FormController::class, 'store'])->name('form.store'); // para recolectar los datos del formulario

Route::controller(UserController::class)->group(function(){

Route::get('/profile', 'profile')->name('profile.user'); // Vista del formulario

Route::put('/profile/edit', 'edit_profile')->name('edit.profile'); // editar usuario

Route::get('/profile/object', 'object')->name('object.user');
Route::get('/profile/object/acquired', 'acquired')->name('acquired.user');
});

Route::controller(ObjectController::class)->group(function(){

Route::get('/object/create', 'create_objects')->name('object.create');//este direccion esta en el boton para crer un objeto
Route::post('/object/create/save', 'save_objects')->name('object.save');
Route::delete('/object/delete/{object}', 'delete_objects')->name('delete.button');
Route::post('/object/edit/{object}', 'edit_objects')->name('edit.object');
Route::put('/object/edit/{object}', 'update_objects')->name('edit.button');

});