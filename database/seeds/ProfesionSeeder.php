<?php

use Illuminate\Database\Seeder;
use App\Model\Profesion;

class ProfesionSeeder extends Seeder
{
    public function run()
    {
        $profesion = array(
            [
                'nombre' => 'Profesora'
            ],
            [
                'nombre' => 'Secretaria'
            ],
            [
                'nombre' => 'Abogada'
            ],
            [
                'nombre' => 'Ingeniero'
            ],
            [
                'nombre' => 'Astronauta'
            ],
            [
                'nombre' => 'Bombero'
            ],
            [
                'nombre' => 'Cantante'
            ],
            [
                'nombre' => 'Piloto'
            ],
            [
                'nombre' => 'Juez'
            ],
            [
                'nombre' => 'Científico'
            ],

        );
         
        foreach ($profesion as $profesion){
            Profesion::updateOrCreate($profesion);
        }
    }
}
