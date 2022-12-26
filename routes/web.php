<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\AcademicProductionController;
use App\Http\Controllers\InteresDocenciaController;
use App\Http\Controllers\InteresInvestigacionController;
use App\Http\Controllers\InvestigacionesController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\SemblazaController;

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
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function(){
    
    return view('dashboard');

})->name('dashboard');

//Seccion egresados
Route::get('/egresados', [ContactController::class, 'index'])->name('egresados.index');

Route::get('/egresados/registro', [ContactController::class, 'create'])->name('egresados.create')->middleware('auth');

Route::post('/egresados', [ContactController::class, 'store'])
->name('egresados.store')
->middleware('auth');

Route::get('/egresados/edit/{contact:name}', [ContactController::class, 'edit'])
->name('egresados.edit')
->middleware('auth');

Route::get('/egresados/show', [ContactController::class, 'show'])
->name('egresados.show')
->middleware('auth');

Route::put('/egresados/update/{contact}', [ContactController::class, 'update'])
->name('egresados.update')
->middleware('auth');

Route::get('/egresados/delete/{contact:name}', [ContactController::class, 'destroy'])
->name('egresados.destroy')
->middleware('auth');

//Articles
Route::get('/articulos', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articulos/registro', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articulos', [ArticleController::class, 'store'])->name('articles.store');

//Docentes
Route::get('/docentes', [ProfesorController::class ,'index'])->name('docentes');
Route::get('/informacion_docentes', [ProfesorController::class ,'show'])->name('docentes.show');
Route::get('/docentes/{profesor}/edit', [ProfesorController::class ,'show'])->name('docentes.edit');

//Rutas de la informacion del perfil del profesor
Route::get('/docentes/{profesor:nombre}/perfil', [PerfilController::class ,'edit'])->name('perfil.edit');
Route::put('/docentes/{profesor}/perfil', [PerfilController::class ,'update'])->name('perfil.update');
Route::post('/perfil/store', [PerfilController::class ,'store'])->name('perfil.store');

//Rutas para actualizar la semblanza
Route::put('docentes/{profesor}/semblanza', [SemblazaController::class, 'update'])->name('semblanza.update');

//Rutas para actualizar intereses en la docencia
Route::put('docentes/{profesor}/intereses_docencia', [InteresDocenciaController::class, 'update'])->name('docencia.update');

//Rutas para actualizar intereses en la investigacion
Route::put('docentes/{profesor}/intereses_investigacion', [InteresInvestigacionController::class, 'update'])->name('investigacion.update');

//Rutas para actualizar investigaciones
Route::put('docentes/{profesor}/investigaciones', [InvestigacionesController::class, 'update'])->name('investigaciones.update');

//Clients
Route::resource('clientes', ClientController::class);

//Services
Route::resource('servicios', ServiceController::class);

Route::post('/', [PrincipalController::class,'store'])->name('PrincipalController.store');

//Academic production
Route::get('/produccion_academica', [AcademicProductionController::class, 'index'])->name('academicProduction.index');
