<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LocalizacionController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ReporteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});//inicio 


Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('milogout');//cierra sesion


Route::get('/productos', function () {
    return view('productos');
})->middleware(['auth', 'verified'])->name('productos');

Route::middleware('auth')->group(function () {
    //perfiles
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //indexes-------------------------------------------
    Route::get('/productos', [ProductoController::class , 'index'])->name('productos');
    Route::get('/categorias', [CategoriaController::class , 'index'])->name('categorias');
    Route::get('/localizaciones', [LocalizacionController::class , 'index'])->name('localizaciones');
    Route::get('/reporte', [ProductoController::class , 'index'])->name('reporte');
    Route::get('/buscarepo', [ProductoController::class , 'buscar'])->name('buscar');
    //create-------------------------------------------
    Route::get('/producto/create', [ProductoController::class , 'create'])->name('producto.create');
    Route::post('/producto/store', [ProductoController::class , 'store'])->name('producto.store');

    Route::get('/categoria/create', [CategoriaController::class , 'create'])->name('categoria.create');
    Route::post('/categoria/store', [CategoriaController::class , 'store'])->name('categoria.store');

    Route::get('/localizacion/create', [LocalizacionController::class , 'create'])->name('localizacion.create');
    Route::post('/localizacion/store', [LocalizacionController::class , 'store'])->name('localizacion.store');

    //delete-----------------------------------------
    Route::get('/del-producto/{id}', [ProductoController::class , 'destroy'])->name('delproducto');
    Route::get('/del-categoria/{id}', [CategoriaController::class , 'destroy'])->name('delcategoria');
    Route::get('/del-localizacion/{id}', [LocalizacionController::class , 'destroy'])->name('dellocalizacion');

    //update ----------------------------
    Route::get('/mod-producto/{id}', [ProductoController::class , 'edit'])->name('modproducto');
    Route::post('/update-producto/{id}', [ProductoController::class , 'update'])->name('updateproducto');





});

require __DIR__.'/auth.php';
