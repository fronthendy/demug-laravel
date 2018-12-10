<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

class FilmesController extends Controller
{
    

    public function show(){
        $filmes = Filme::paginate(5);

        return view('filmes')->with('filmes', $filmes);
        
    }

    public function procurarFilmeId($id){
        $filmes = Filme::find($id);

        return view('filme')->with('filme', $filmes);

    }

}
