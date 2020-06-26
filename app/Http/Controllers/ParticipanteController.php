<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participante;

class ParticipantesController extends Controller
{
    public function index()
    {
        $p = Participante::all();
        return response()->json($p, 200);
    }

    public function find($id)
    {
        $p = Participante::find($id);
        if($p){
            return response()->json($p, 200);
        }
        return response()->json(["data not found"], 404);
    }

    public function create(Request $req)
    {
        $p = new Participante;
        $p->id_usuario = $req->id_usuario;
        $p->id_evento = $req->id_evento;
        $p->save();
        return response()->json(["saved succesfully"], 200);
    }

    public function update(Request $req, $id)
    {
        $p = Participante::find($id);
        if($p){
            $p->id_usuario = $req->id_usuario;
            $p->id_evento = $req->id_evento;
            $p->save();
            return response()->json(["updated succesfully"], 200);
        }
        return response()->json(["data not found"], 404);
    }

    public function delete($id)
    {
        $p = Participante::find($id);

        if($p){
            $p->delete();
            return response()->json(["deleted succesfully"], 200);
        }
        return response()->json(["post not found"], 404);
    }
    
}
?>