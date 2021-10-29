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


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('usuario.edit')->with('usuario', $usuario);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $usuarios = User::find($id);

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

    public function destroy($id)
    {
        $usuario = User::find($id);
        
        $usuario->delete();

        return redirect('/users');
    }


}
