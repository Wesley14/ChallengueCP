<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Folio;
use App\Models\Estatus;
use App\Models\User;
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

        $auxiliares = DB::table('comentarios as c')
        ->join('users as u', 'u.id', '=', 'c.usuario_id')
        ->join('folios as f', 'f.id', '=', 'c.folio_id')
        ->select('c.id','usuario_id','folio_id','f.codigo','f.titulo', 'c.comentario', 'u.name as nombre')
        ->get();
        //echo($auxiliar);

        //$auxiliares = DB::select('SELECT c.id as id, f.codigo as codigo, c.comentario as comentario, u.nombre as nombre FROM comentarios c inner join usuarios u on u.id = c.usuario_id INNER JOIN folios f on f.id = c.folio_id',);


       // $auxiliares = Comentario::all();//DB::table('comentarios as c')
        //->join('usuarios as u', 'u.id', '=', 'c.usuario_id')
        //->select('c.id','c.usuario_id','c.folio_id', 'c.comentario', 'u.nombre')
        //->get();
         
        //echo($auxiliares);

     

        return view('comentario.index')->with('auxiliares',$auxiliares);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($folio_id){

        $folio = Folio::find($folio_id);
        $usuarios = User::all();
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
        $usuarios = new Comentario();

    //     $id = Folio::find()

    //     $usuarios->name = $request->get('nombre');
    //     $usuarios->lastname = $request->get('autor');
    //     $usuarios->email = $request->get('comentario');
    //    // Wesley

    //     $usuarios->save();

        return redirect('/comentarios');
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect('/comentarios');
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
        return redirect('/comentarios');
        
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
