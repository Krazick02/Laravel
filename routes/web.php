<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/',HomeController::class);

Route::controller(CursoController::class)->group(function(){
    //las rutas get son para mostrar informacion
    Route::get('cursos','index')->name('cursos.index');
    Route::get('cursos/create','create')->name('cursos.create');
    //las rutas post son ingresar informacion
    Route::post('cursos','store')->name('cursos.store');
    Route::get('cursos/{curso}','show')->name('cursos.show');
    Route::get('cursos/{curso}/edit','edit')->name('cursos.edit');

    //las rutas put son para actualizar un registros
    Route::put('cursos/{curso}','update')->name('cursos.update');

    //las rutas delete son para eliminar elementos
    Route::delete('cursos/{curso}','destroy')->name('cursos.destroy');
});
