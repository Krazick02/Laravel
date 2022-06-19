<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Routing\Router;

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

Route::get('/',HomeController::class)->name('home');

//Rutas con un grupo
// Route::controller(CursoController::class)->group(function(){
//     //las rutas get son para mostrar informacion
//     Route::get('cursos','index')->name('cursos.index');
//     Route::get('cursos/create','create')->name('cursos.create');
//     //las rutas post son ingresar informacion
//     Route::post('cursos','store')->name('cursos.store');
//     Route::get('cursos/{curso}','show')->name('cursos.show');
//     Route::get('cursos/{curso}/edit','edit')->name('cursos.edit');

//     //las rutas put son para actualizar un registros
//     Route::put('cursos/{curso}','update')->name('cursos.update');

//     //las rutas delete son para eliminar elementos
//     Route::delete('cursos/{curso}','destroy')->name('cursos.destroy');
// });


//Asi definir las rutas con el metodo resource, necesita ser elaborado con las convenciones
Route::resource('cursos',CursoController::class);

//Asi se pueden modificar el nombre de la ruta, pero sin modificar los nombres en las rutas ni los parametros
//Route::resource('asignaturas',CursoController::class)->parameters(['asignaturas'=>'curso'])->names('cursos');

Route::view('us','us')->name('us');

//esta ruta hace que envienmos correos
Route::get('contactUs',function(){
    $correo = new ContactanosMailable;
    Mail::to('elangelcotaymas@gmail.com')->send($correo);
    return "Mensage enviado";
});
