<?php

namespace Database\Seeders;
use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //asi se invoca el factory para llenar el numero de beses que se desee en la base de datos
        Curso::factory(50)->create();
    }
}
