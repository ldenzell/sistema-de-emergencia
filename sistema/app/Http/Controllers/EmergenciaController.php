<?php

namespace App\Http\Controllers;

use App\Emergencia;
use Illuminate\Http\Request;
use FarhanWazir\GoogleMaps\GMaps;

class EmergenciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('searchText'));
            $emergencias = Emergencia::join('paciente', 'emergencia.paciente_id', '=', 'paciente.id')
            ->select('emergencia.id','paciente.nombres', 'paciente.paterno', 'paciente.materno', 'paciente.ci', 'paciente.alergias', 'paciente.presion_arterial', 'paciente.frecuencia_respiratoria', 'paciente.pulso', 'paciente.temperatura')
            ->where('paciente.nombres', 'LIKE', '%' . $query . '%')
            ->where('paciente.paterno', 'LIKE', '%' . $query . '%')
            ->orderBy('emergencia.id', 'desc')
            ->paginate(7);
            return view('emergencia.index', ["emergencias" => $emergencias, "searchText" => $query]);
        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Emergencia  $emergencia
     * @return \Illuminate\Http\Response
     */
    public function show(Emergencia $emergencia)
    {
        $config['center'] = "$emergencia->latitude,$emergencia->longitude";
        $config['zoom'] = '17';
        $config['map_height'] = '600px';
        $gmap = new GMaps();
        $gmap->initialize($config);

        $marker['position'] = "$emergencia->latitude,$emergencia->longitude";
        $gmap->add_marker($marker);
        $map = $gmap->create_map();
        
        return view('emergencia.show',compact('map','emergencia'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Emergencia  $emergencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emergencia $emergencia)
    {
        //
    }
}
