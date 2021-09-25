<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Persona;

class PersonaController extends Controller
{
    public function index(){
    $personas = Persona::select('tipo_documento_id','nivel_educativo_id', 'profesion_id',
    'codebar','identificacion','nombres','apellidos', 'direccion', 'telefono', 'email','estado')
        ->where('estado',1)
        ->paginate(20);
         return response()->json(['personas'=>$personas],201);
    }
    
    public function store(Request $request){
        try {
            $personas = new Persona();
            $personas -> tipo_documento_id = $request -> tipo_documento_id;
            $personas -> nivel_educativo_id = $request -> nivel_educativo_id;
            $personas -> profesion_id = $request -> profesion_id;
            $personas -> codebar = $request -> codebar;
            $personas -> identificacion = $request -> identificacion;
            $personas -> nombres = $request -> nombres;
            $personas->apellidos = $request->apellidos;
            $personas->direccion = $request->direccion;
            $personas->telefono = $request->telefono;
            $personas->email = $request->email;
            $personas->estado = $request->estado;
            $personas -> save();
            return $this->success_response($personas);
        } catch (\Throwable $th) {
            return $this->error_response($th->getmessage());
        }
    }
//actualizar los datos de usuario 

    public function update (Request $request){
        try {
            $personas = Persona::find($request->id);
            $personas -> tipo_documento_id = $request -> tipo_documento_id;
            $personas -> nivel_educativo_id = $request -> nivel_educativo_id;
            $personas -> profesion_id = $request -> profesion_id;
            $personas -> codebar = $request -> codebar;
            $personas -> identificacion = $request -> identificacion;
            $personas -> nombres = $request -> nombres;
            $personas->apellidos = $request->apellidos;
            $personas->direccion = $request->direccion;
            $personas->telefono = $request->telefono;
            $personas->email = $request->email;
            $personas->estado = $request->estado;
            $personas -> save();
            return $this->success_response($personas);
        } catch (\Throwable $th) {
            return $this->error_response($th->getmessage());
        }
    }

    public function state (Request $request){
        try {
            $personas = Persona::find($request->id);
            $personas->estado = $request -> estado;
            $personas->save();
            return $this->success_response($personas);
        } catch (\Throwable $th) {
            return $this->error_response($th->getmessage());
        }
    }


   public function error_response($error){
        return response()->json([
            'message' => 'error',
            'data' => $error
        ], 501);
    }

    public function success_response($data){
        return response()->json([
            'message' => 'success',
            'data' => $data
        ], 201);
    }
}



