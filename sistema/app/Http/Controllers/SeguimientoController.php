<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeguimientoFormRequest;
use App\Paciente;
use App\Seguimiento;
use Illuminate\Http\Request;

class SeguimientoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('paramedico');
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
            $seguimientos = Seguimiento::join('paciente', 'seguimiento_paciente.paciente_id', '=', 'paciente.id')
            ->select('seguimiento_paciente.id','seguimiento_paciente.descripcion','paciente.nombres','paciente.paterno','paciente.materno','paciente.ci','paciente.alergias') 
            ->where('paciente.ci', 'LIKE', '%' . $query . '%')
            ->orwhere('paciente.paterno', 'LIKE', '%' . $query . '%')
            ->orderBy('seguimiento_paciente.id', 'desc')
            ->paginate(7);
            return view('seguimiento.index', ["seguimientos" => $seguimientos, "searchText" => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seguimiento.create',[
            'pacientes' => Paciente::where('condicion','1')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeguimientoFormRequest $request)
    {
        $seguimiento = new Seguimiento();
        $seguimiento->paciente_id = $request->get('paciente_id');
        $seguimiento->descripcion = $request->get('descripcion');
        $seguimiento->save();
        return redirect()->route('seguimiento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Seguimiento $seguimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Seguimiento $seguimiento)
    {
        return view('seguimiento.edit', [
            'seguimiento' => $seguimiento,
            'pacientes' => Paciente::where('condicion', '1')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */
    public function update(SeguimientoFormRequest $request, Seguimiento $seguimiento)
    {
        $seguimiento->update($request->all());

        return redirect()->route('seguimiento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seguimiento $seguimiento)
    {
        $seguimiento->delete();

        return redirect()->route('seguimiento.index');
    }
}
