<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*
Este comando permite utilizar tinker para agregar inserciones mediante objetos
php artisan tinker

una ves activamos tinker podemos usar el namespace para invocar este modelo
>>> use App\Models\Curso

creamos un objeto e instanciamos el modelo
>>> $curso = new Curso
=> App\Models\Curso {#3538}

accedemos a el atrabes del nomnbre del atributo y le asignamos el valor
>>> $curso->name = 'Laravel'
=> "Laravel"

igual con la descripcion
>>> $curso->description = 'El mejor framework del mundo'
=> "El mejor framework del mundo"

asi vemos los valores del objeto que creamos
>>> $curso
=> App\Models\Curso {#3538
     name: "Laravel",
     description: "El mejor framework del mundo",
   }

   para que este objeto se guarde en la base de datos es necesario que usemos la funcion save()
>>> $curso->save()
=> true

>>>
*/
class Curso extends Model
{
    use HasFactory;
    //esta linea de codigo permite cambia la tabla a la que se quiere relacionar el modelo
    //----protected $table= "users";-------

    //esta linea de codigo puede decir que campos quiere evaluar para permitir la asignacion masiva
    //protected $fillable=['name','description','category'];

    //esta linea descargta campos para permitir la asignacion masiva
    protected $guarded=['status'];
}
