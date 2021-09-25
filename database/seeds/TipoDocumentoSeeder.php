<?php

use Illuminate\Database\Seeder;
use App\Model\TipoDocumento;

class TipoDocumentoSeeder extends Seeder
{
    public function run()
    {
        $tipo_documento = array(
            [
                'nombre' => 'Cédula de ciudadania'
            ],
            [
                'nombre' => 'Cédula de extranjería colombiana'
            ],
            [
                'nombre' => 'Cédula extranjera'
            ],
            [
                'nombre' => 'Documento extranjero'
            ],
            [
                'nombre' => 'Pasaporte'
            ],
            [
                'nombre' => 'Registro civil'
            ],
            [
                'nombre' => 'Tarjeta de identidad'
            ],
            [
                'nombre' => 'Carnet'
            ],
            [
                'nombre' => 'Licencia de Conducir'
            ],
            [
                'nombre' => 'Registro de matrimonio'
            ],

        );
         
        foreach ($tipo_documento as $documento){
            TipoDocumento::updateOrCreate($documento);
        }
    }
}
