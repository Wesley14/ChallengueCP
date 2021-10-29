<?php

/*namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuario.index')->with('usuarios',$usuarios);
    }

   
    public function create()
    {
        return view('usuario.create');
    }

    
    public function store(Request $request)
    {
        $usuarios = new Usuario();

        $usuarios->nombre = $request->get('nombre');
        $usuarios->apellido = $request->get('apellido');
        $usuarios->correo = $request->get('correo');
        $usuarios->fecha_nacimiento  = $request->get('fecha_nacimiento');

        $usuarios->save();

        return redirect('/usuarios');
    }

   

    
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuario.edit')->with('usuario', $usuario);
    }

   
    public function update(Request $request, $id)
    {
        
        $usuarios = Usuario::find($id);

        $usuarios->nombre = $request->get('nombre');
        $usuarios->apellido = $request->get('apellido');
        $usuarios->correo = $request->get('correo');
        $usuarios->fecha_nacimiento  = $request->get('fecha_nacimiento');

        $usuarios->save();

        return redirect('/usuarios');
    }

    
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        
        $usuario->delete();

        return redirect('/usuarios');
    }
}*/
