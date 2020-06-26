<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class EventosController extends Controller
{
    public function index()
    {
        $evento = Evento::all();
        return response()->json($evento, 200);
    }

    public function find($id)
    {
        $evento = Evento::find($id);
        if($evento){
            return response()->json($evento, 200);
        }
        return response()->json(["data not found"], 404);
    }

    public function create(Request $req)
    {
        $evento = new Evento;
        $evento->fecha = $req->fecha;
        $evento->lugar = $req->lugar;
        $evento->descripcion = $req->descripcion;
        $evento->titulo = $req->titulo;
        $evento->save();
        return response()->json(["saved succesfully"], 200);
    }

    public function update(Request $req, $id)
    {
        $evento = Evento::find($id);
        if($evento){
            $evento->fecha = $req->fecha;
            $evento->lugar = $req->lugar;
            $evento->descripcion = $req->descripcion;
            $evento->titulo = $req->titulo;
            $evento->save();
            return response()->json(["updated succesfully"], 200);
        }
        return response()->json(["data not found"], 404);
    }

    public function delete($id)
    {
        $evento = Evento::find($id);

        if($evento){
            $evento->delete();
            return response()->json(["deleted succesfully"], 200);
        }
        return response()->json(["post not found"], 404);
    }
    
}
?>