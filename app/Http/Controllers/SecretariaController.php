<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use app\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secretarias=Secretaria::with(relations: 'user')->get();
        return view('admin.secretarias.index', compact('secretarias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.secretarias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$datos = request()->all();
        return response()->json($datos);*/

        $request->validate([
            'nombres'=>'required|max:200',
            'apellidos'=>'required|max:200',
            'cedula'=>'required|max:200|unique:secretarias',
            'celular'=>'required|max:16',
            'fecha_nacimiento'=>'required',
            'direccion'=>'required|max:200',
            'email'=>'required|max:200|unique:users',
            'password'=>'required|max:200|confirmed',
        ]);

        $usuario = new User();
        $usuario->name=$request->nombres;
        $usuario->email=$request->email;
        //para encritar la contraseña
        $usuario->password = Hash::make($request['password']);
        $usuario->save();

        $secretarias = new Secretaria();
        $secretarias->user_id=$usuario->id;
        $secretarias->nombres=$request->nombres;
        $secretarias->apellidos=$request->apellidos;
        $secretarias->cedula=$request->cedula;
        $secretarias->celular=$request->celular;
        $secretarias->fecha_nacimiento=$request->fecha_nacimiento;
        $secretarias->direccion=$request->direccion;
        $secretarias->save();

        return redirect()->route('admin.secretarias.index')
       ->with('mensaje','Secretarias Registrada Correctamente')
        ->with('icons','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $secretarias=Secretaria::with('user')->findOrFail("$id");
        return view('admin.secretarias.show', compact('secretarias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $secretarias=Secretaria::with('user')->findOrFail("$id");
        return view('admin.secretarias.edit', compact('secretarias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Secretaria $secretaria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secretaria $secretaria)
    {
        //
    }
}
