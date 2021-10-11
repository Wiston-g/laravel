<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Administrador;


class AdminController extends Controller
{
    //
    public function index()
    {
        return view('administrador.index');
    }

    public function create()
    {
        return view('administrador.create');
    }

    public function store(Request $request)
    {   
        $administrador = new Administrador();

        $administrador->nombre = $request->nombre;
        $administrador->correo = $request->correo;
        $administrador->contrasena = $request->contrasena;

       //return $administrador;
       $administrador->save();
       //return $request->all();
    }

    public function show($admi)
    {
        return view('administrador.show', compact('admi'));
    }
}
