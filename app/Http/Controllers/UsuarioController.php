<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;


class UsuarioController extends BaseController
{
    public function index(Request $request){

        $usuarios = DB::table('usuarios');
        $campoBusqueda = $request->get('campo_busqueda');
        if(isset($campoBusqueda)){
            $usuarios = $usuarios->where('name_user','like','%'.$campoBusqueda."%");
        }
        
        return $usuarios->get();
    }
    public function store(Request $request){
       

        $cliente = new User();
        $cliente->correo_empresa="carlos";
        $cliente->nombre_empresa="carlos";
        $cliente->direccion_empresa="carlos";
        $cliente->name_user="carlos";
        $cliente->url_logo="carlos";
        $cliente->nombre = $request->get('nombre');
        $cliente->email = $request->get('email');
        $cliente->save();

        return response()->json($cliente, 201);
    }
}
