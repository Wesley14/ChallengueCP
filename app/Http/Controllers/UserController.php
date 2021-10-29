<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('usuario.index')->with('usuarios',$usuarios);
    }


    public function create()
    {
        return view('usuario.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new User();

        $usuarios->name = $request->get('nombre');
        $usuarios->lastname = $request->get('apellido');
        $usuarios->email = $request->get('correo');
        $usuarios->password = $request->get('contraseña');
        $usuarios->fecha_nacimiento  = $request->get('fecha_nacimiento');
        $usuarios->typeuser = $request->get('tipousuario');
       // Wesley

        $usuarios->save();

        return redirect('/users');
    }

}
