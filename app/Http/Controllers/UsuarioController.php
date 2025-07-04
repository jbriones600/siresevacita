<?php

namespace App\Http\Controllers;

use app\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        //sonsulta usuario
        $usuarios=User::all();
        return view('admin.usuarios.index', compact('usuarios'));
    }

     public function create(){
        return view('admin.usuarios.create');
    }

    public function store(Request $request){
        /*$datos = request()->all();
        return response()->json($datos);*/
        $request->validate([
            'name'=>'required|max:200|unique:users',
            'email'=>'required|max:200|unique:users',
            'password'=>'required|max:200|confirmed',
        ]);
        $usuario = new User();
        $usuario->name=$request->name;
        $usuario->email=$request->email;
        //para encritar la contraseña
        $usuario->password = Hash::make($request['password']);
        $usuario->save();

        return redirect()->route('admin.usuarios.index')
        ->with('mensaje','Usuario Registrado Correctamente')
        ->with('icons','success');

    }

    public function show($id){
       $usuarios=User::find($id);
        return view('admin.usuarios.show', compact('usuarios'));
    }
}
