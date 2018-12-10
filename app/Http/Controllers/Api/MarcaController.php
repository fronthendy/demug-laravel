<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;

class MarcaController extends Controller
{
    public function exibir(){
        $marcas = Marca::all();

        return $marcas->toJson();
    }
}
