<?php

use App\Http\Controllers\CompartirRutaController;
use App\Http\Controllers\CrearRutaController;
use App\Models\compartirRuta;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/ruta/create', [CrearRutaController::class, 'create']);//de este modo ingreso solo al metodo create
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::resource('ruta', CrearRutaController::class); //de este modo ingreso a todos los metodos que tiene el controlador
      
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function(){
    Route::resource('compartir', CompartirRutaController::class);
});



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::resource('/create', CrearRutaController::class); //de este modo ingreso solo al metodo create
      
// });


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function(){
//     Route::get('compartir', CompartirRutaController::class)->name('shared');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function (){
//     Route::get('/ver-ruta', VerRuta::class)->name('verRuta');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function(){
//     Route::get('/configurar', Configurar::class)->name('configurar');
// });

