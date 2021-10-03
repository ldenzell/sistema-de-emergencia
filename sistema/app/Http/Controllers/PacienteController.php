<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use App\Http\Requests\PacienteFormRequest;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
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
            $pacientes = Paciente::where('nombres', 'LIKE', '%' . $query . '%')
                ->where('condicion', '=', '1')
                ->orwhere('paterno', 'LIKE', '%' . $query . '%')
                ->where('condicion', '=', '1')
                ->orwhere('ci', 'LIKE', '%' . $query . '%')
                ->where('condicion', '=', '1')
                ->orderBy('id', 'desc')
                ->paginate(7);
            return view('paciente.index', ["pacientes" => $pacientes, "searchText" => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create',[
            'paciente' => new Paciente()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacienteFormRequest $request)
    {
        $paciente = new Paciente();
        $paciente->nombres = $request->get('nombres');
        $paciente->paterno = $request->get('paterno');
        $paciente->materno = $request->get('materno');
        $paciente->ci = $request->get('ci');
        $paciente->sexo = $request->get('sexo');
        $paciente->edad = $request->get('edad');
        $paciente->email = $request->get('email');
        $paciente->password = $request->get('password');
        $paciente->presion_arterial = $request->get('presion_arterial');
        $paciente->frecuencia_respiratoria = $request->get('frecuencia_respiratoria');
        $paciente->pulso = $request->get('pulso');
        $paciente->temperatura = $request->get('temperatura');
        $paciente->condicion = '1';
        $paciente->alergias = $request->get('alergias');
       $paciente->save();
       dd($paciente);
        return redirect()->route('paciente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        return view("paciente.edit", compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(PacienteFormRequest $request, Paciente $paciente)
    {
        $paciente->update($request->all());
        return redirect()->route('paciente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->condicion = '0';
        $paciente->update();
        return redirect()->route('paciente.index');
    }
}