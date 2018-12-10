<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function mostrarUsuarios(){
        $usuarios = ['hendy', 'eita', 'sextou'];

        return view('usuarios')->with('usuarios', $usuarios);
    }
}
