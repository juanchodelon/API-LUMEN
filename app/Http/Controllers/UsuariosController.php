<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuario = Usuario::all();
        return response()->json($usuario, 200);
    }

    public function find($id)
    {
        $usuario = Usuario::find($id);
        if($usuario){
            return response()->json($usuario, 200);
        }
        return response()->json(["data not found"], 404);
    }

    public function create(Request $req)
    {
        $usuario = new Usuario;
        $usuario->nombre = $req->nombre;
        $usuario->correo = $req->correo;
        $usuario->apellido = $req->apellido;
        $usuario->save();
        return response()->json(["saved succesfully"], 200);
    }

    public function update(Request $req, $id)
    {
        $usuario = Usuario::find($id);
        if($usuario){
            $usuario->nombre = $req->nombre;
            $usuario->correo = $req->correo;
            $usuario->apellido = $req->apellido;
            $usuario->save();
            return response()->json(["updated succesfully"], 200);
        }
        return response()->json(["data not found"], 404);
    }

    public function delete($id)
    {
        $usuario = Usuario::find($id);

        if($usuario){
            $usuario->delete();
            return response()->json(["deleted succesfully"], 200);
        }
        return response()->json(["post not found"], 404);
    }
    
}
?>