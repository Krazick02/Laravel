<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * para crear un factory se usa el siguiente comando
     * php artisan make:factory CursoFactory --model=Curso
     *
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model= Curso::class;

    public function definition()
    {
        $name=$this->faker->sentence();
        return [
            //agregamos los atributos y el tipo de dtao que deseemos agregar
            //FAKER es la funcion que busca el text para agregar y el cuarto atributo es el tipo de texto que deseemos agregarx
            'name'=>$name,
            'slug'=>Str::slug($name,'-'),
            'description'=>$this->faker->paragraph(),
            'category' =>$this->faker->randomElement(['Desarrollo web','Diseño web','Fake facs'])
        ];
    }
}
