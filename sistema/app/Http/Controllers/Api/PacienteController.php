<?php

namespace App\Http\Controllers\Api;

use App\Paciente;
use App\Emergencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PacienteController extends Controller
{
    public function login(Request $request)
    {
        if($request->post('email') && $request->post('password')) {
            $paciente = Paciente::where('email',$request->post('email'))->where('password',$request->post('password'))->where('condicion', 1)->first();
            if($paciente == ''){
                return response()->json(['error' => 'El usuario no esta registrado, o no se encuentra habilitado'], 401);
            }else{
                return response()->json(['success' => 'true', 'data' => $paciente],200);
            }
        }else{
            return response()->json(['error' => 'Unauthorized'], 401);
        } 
    }
    public function perfil(Request $request)
    {
        if($request->post('paciente_id')){
            $paciente = Paciente::where('id',$request->post('paciente_id'))->where('condicion',1)->first();
            return response()->json(['success' => 'true', 'data' => $paciente], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        } 
    }
    public function emergencia(Request $request)
    {
        $existe = Emergencia::where('latitude',$request->post('latitude'))->where('longitude',$request->post('longitude'))->where('paciente_id',$request->post('paciente_id'))->exists();
        if($existe){
            return response()->json(['success' => 'false', 'data' => 'Ya existe el registro'], 401);
        }else{
            $emergencia = new Emergencia();
            $emergencia->latitude = $request->post('latitude');
            $emergencia->longitude = $request->post('longitude');
            $emergencia->paciente_id = $request->post('paciente_id');
            $emergencia->save();
    
            return response()->json($emergencia,200);
        }
    }
}