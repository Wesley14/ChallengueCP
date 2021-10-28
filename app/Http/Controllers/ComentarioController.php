<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Folio;
use App\Models\Estatus;
use App\Models\Usuario;
use App\Models\Comentario;
use Illuminate\Support\Facades\DB;

class ComentarioController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $auxiliar = DB::table('comentarios as c')
        ->join('usuarios as u', 'u.id', '=', 'c.usuario_id')
        ->join('folios as f', 'f.id', '=', 'c.folio_id')
        ->select('c.id','f.codigo','f.titulo', 'c.comentario', 'u.nombre')
        ->get();


        return view('comentario.index')->with('auxiliar',$auxiliar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($folio_id){

        $folio = Folio::find($folio_id);
        $usuarios = Usuario::all();
        return view('comentario.create')->with('folio', $folio)->with('usuarios',$usuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('/usuarios');*/
    }
}
