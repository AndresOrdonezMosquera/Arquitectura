<?php

use Illuminate\Database\Seeder;
use App\Model\Persona;

class PersonaSeeder extends Seeder
{
    public function run()
    {
        $persona = array(
            [
                'tipo_documento_id' => 1,
                'nivel_educativo_id' => 1,
                'profesion_id' => 1,
                'codebar' => '1030',
                'identificacion' => '1393848483',
                'nombres' => 'Laura Yisela',
                'apellidos' => 'Cedeño Andrade',
                'direccion' => 'CRA 5BA # 1-34',
                'telefono' => '3243214563',
                'email' => 'laura@gmail.com',
                'estado' => 2

            ],
            [
                'tipo_documento_id' => 2,
                'nivel_educativo_id' => 2,
                'profesion_id' => 2,
                'codebar' => '1031',
                'identificacion' => '345263725362',
                'nombres' => 'Maria Angelica',
                'apellidos' => 'Castro Andrade',
                'direccion' => 'CRA 4 A # 1-18',
                'telefono' => '3132765432',
                'email' => 'mariangelica@gmail.com',
                'estado' => 1

            ],
            [
                'tipo_documento_id' => 3,
                'nivel_educativo_id' => 3,
                'profesion_id' => 3,
                'codebar' => '1032',
                'identificacion' => '83456543',
                'nombres' => 'Andres',
                'apellidos' => 'Ordoñez',
                'direccion' => 'CRA 52 B # 11-24',
                'telefono' => '3143217865',
                'email' => 'andres@gmail.com',
                'estado' => 1

            ],
            [
                'tipo_documento_id' => 4,
                'nivel_educativo_id' => 4,
                'profesion_id' => 4,
                'codebar' => '1033',
                'identificacion' => '45678765',
                'nombres' => 'Luz Marina',
                'apellidos' => 'Andrade Diaz',
                'direccion' => 'CRA 3 B # 19-4',
                'telefono' => '3115645432',
                'email' => 'luzmarina@gmail.com',
                'estado' => 2

            ],
            [
                'tipo_documento_id' => 5,
                'nivel_educativo_id' => 5,
                'profesion_id' => 5,
                'codebar' => '1034',
                'identificacion' => '87654321',
                'nombres' => 'Hector',
                'apellidos' => 'Cedeño',
                'direccion' => 'CRA 10 A # 5-74',
                'telefono' => '3212776543',
                'email' => 'hector@gmail.com',
                'estado' => 1

            ],
            [
                'tipo_documento_id' => 6,
                'nivel_educativo_id' => 6,
                'profesion_id' => 6,
                'codebar' => '1035',
                'identificacion' => '1004463523',
                'nombres' => 'Duverney',
                'apellidos' => 'Carvajal Andrade',
                'direccion' => 'CRA 12 B # 12-37',
                'telefono' => '3234564321',
                'email' => 'duverney_carvajal@gmail.com',
                'estado' => 2

            ],
            [
                'tipo_documento_id' => 7,
                'nivel_educativo_id' => 7,
                'profesion_id' => 7,
                'codebar' => '1036',
                'identificacion' => '1084356543',
                'nombres' => 'Hector Leandro',
                'apellidos' => 'Andrade Perdomo',
                'direccion' => 'CRA 11 A # 23-87',
                'telefono' => '3145237865',
                'email' => 'leandro_perdomo@gmail.com',
                'estado' => 1

            ],
            [
                'tipo_documento_id' => 8,
                'nivel_educativo_id' => 8,
                'profesion_id' => 8,
                'codebar' => '1037',
                'identificacion' => '83245653',
                'nombres' => 'Oscar',
                'apellidos' => 'Castro Andrade',
                'direccion' => 'CRA 3 A # 15-45',
                'telefono' => '3124563241',
                'email' => 'oscar_castro@gmail.com',
                'estado' => 2

            ],
            [
                'tipo_documento_id' => 9,
                'nivel_educativo_id' => 9,
                'profesion_id' => 9,
                'codebar' => '1038',
                'identificacion' => '100449326',
                'nombres' => 'Maria Paula',
                'apellidos' => 'Cerquera Ceballes',
                'direccion' => 'CRA 34 C # 56-23',
                'telefono' => '3245678906',
                'email' => 'paulacerquera@gmail.com',
                'estado' => 1

            ],
            [
                'tipo_documento_id' => 10,
                'nivel_educativo_id' => 10,
                'profesion_id' => 10,
                'codebar' => '1039',
                'identificacion' => '67546324',
                'nombres' => 'Juan Daniel',
                'apellidos' => 'Perdomo Diaz',
                'direccion' => 'CRA 7 A # 10-45',
                'telefono' => '3114567865',
                'email' => 'juan_daniel@gmail.com',
                'estado' => 2

            ],
           
        );
         
        foreach ($persona as $persona){
            Persona::updateOrCreate($persona);
        }
    }
}
