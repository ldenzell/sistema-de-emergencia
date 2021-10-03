<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ParamedicoFormRequest;
use App\Http\Requests\EditParamedicoFormRequest;

class ParamedicoController extends Controller
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
            $paramedicos = User::where('nombre', 'LIKE', '%' . $query . '%')
                ->where('condicion', '=', '1')
                ->orderBy('id', 'desc')
                ->paginate(7);
            return view('paramedico.index', ["paramedicos" => $paramedicos, "searchText" => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paramedico.create',[
            'paramedico' => new User()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParamedicoFormRequest $request)
    {
        $paramedico = new User();
        $paramedico->nombre = $request->get('nombre');
        $paramedico->paterno = $request->get('paterno');
        $paramedico->matrno = $request->get('matrno');
        $paramedico->sexo = $request->get('sexo');
        $paramedico->email = $request->get('email');
        $paramedico->password = Hash::make($request->get('password'));
        $paramedico->rol = $request->get('rol');
        $paramedico->condicion = '1';
        $paramedico->save();
        return redirect()->route('paramedico.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $paramedico
     * @return \Illuminate\Http\Response
     */
    public function show(User $paramedico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $paramedico
     * @return \Illuminate\Http\Response
     */
    public function edit(User $paramedico)
    {
        return view('paramedico.edit',compact('paramedico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $paramedico
     * @return \Illuminate\Http\Response
     */
    public function update(EditParamedicoFormRequest $request, User $paramedico)
    {
        $paramedico->nombre = $request->get('nombre');
        $paramedico->paterno = $request->get('paterno');
        $paramedico->materno = $request->get('materno');
        $paramedico->sexo = $request->get('sexo');
        $paramedico->email = $request->get('email');
        if ($request->get('password') != "") $paramedico->password = Hash::make($request->get('password'));
        $paramedico->rol = $request->get('rol');
        $paramedico->update();

        return redirect()->route('paramedico.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $paramedico
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $paramedico)
    {
        $paramedico->condicion = '0';
        $paramedico->update();
        return redirect()->route('paramedico.index');
    }
}
