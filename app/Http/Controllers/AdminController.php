<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function show($admi)
    {
        return view('administrador.show', compact('admi'));
    }
}
