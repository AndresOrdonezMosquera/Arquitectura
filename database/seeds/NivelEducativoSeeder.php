<?php

use Illuminate\Database\Seeder;
use App\Model\NivelEducativo;

class NivelEducativoSeeder extends Seeder
{
    public function run()
    {
        $nivel_educativo = array(
            [
                'nombre' => 'Preescolar'
            ],
            [
                'nombre' => 'Primaria'
            ],
            [
                'nombre' => 'Secundaria'
            ],
            [
                'nombre' => 'Media técnica'
            ],
            [
                'nombre' => 'Normalista'
            ],
            [
                'nombre' => 'Tecnico'
            ],
            [
                'nombre' => 'Tecnológico'
            ],
            [
                'nombre' => 'Profesional'
            ],
            [
                'nombre' => 'Posgrado'
            ],
            [
                'nombre' => 'Ninguno'
            ],

        );
         
        foreach ($nivel_educativo as $nivel_educativo){
            NivelEducativo::updateOrCreate($nivel_educativo);
        }
    }
}