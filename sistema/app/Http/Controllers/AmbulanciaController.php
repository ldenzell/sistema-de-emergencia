<?php

namespace App\Http\Controllers;

use App\Ambulancia;
use Illuminate\Http\Request;
use App\Http\Requests\AmbulanciaFormRequest;

class AmbulanciaController extends Controller
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
            $ambulancias = Ambulancia::where('placa', 'LIKE', '%' . $query . '%')
                ->where('condicion','1')
                ->orwhere('tipo', 'LIKE', '%' . $query . '%')
                ->where('condicion','1')
                ->orderBy('id', 'desc')
                ->paginate(7);
            return view('ambulancia.index', ["ambulancias" => $ambulancias, "searchText" => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ambulancia.create',[
            'ambulancia' => new Ambulancia()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AmbulanciaFormRequest $request)
    {
        $ambulancia = new Ambulancia();
        $ambulancia->placa = $request->get('placa');
        $ambulancia->tipo = $request->get('tipo');
        $ambulancia->modelo = $request->get('modelo');
        $ambulancia->marca = $request->get('marca');
        $ambulancia->condicion = '1';

        return redirect()->route('ambulancia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ambulancia  $ambulancia
     * @return \Illuminate\Http\Response
     */
    public function show(Ambulancia $ambulancia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ambulancia  $ambulancia
     * @return \Illuminate\Http\Response
     */
    public function edit(Ambulancia $ambulancia)
    {
        return view('ambulancia.edit', compact('ambulancia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ambulancia  $ambulancia
     * @return \Illuminate\Http\Response
     */
    public function update(AmbulanciaFormRequest $request, Ambulancia $ambulancia)
    {
        $ambulancia->update($request->all());

        return redirect()->route('ambulancia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ambulancia  $ambulancia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ambulancia $ambulancia)
    {
        $ambulancia->condicion = '0';
        $ambulancia->update();
        return redirect()->route('ambulancia.index');
    }
}