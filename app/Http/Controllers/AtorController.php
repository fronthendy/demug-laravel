<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ator;

class AtorController extends Controller
{
    public function index(){

        $listaAtores = Ator::all();
        return view('atores')->with('atores', $listaAtores);
    }

    public function find($id){
        $ator = Ator::find($id);

        return view('ator')->with('ator', $ator);
    }
    public function edit($id){
        $ator = Ator::find($id);
        return view('atorEdit')->with('ator', $ator);
    }

    public function editPost(Request $request, $id){

        $request->validate([
            'primeiro_nome' => 'unique:ator|min:2|max:15'
        ]);

        $ator = Ator::find($id);

        $ator->nome = $request->input('primeiro_nome');

        $ator->save();
        return redirect('/atores');
    }

    //GET
    public function create(){
        return view('atorCreate');
    }

    //POST
    public function createPost(Request $request){

        $request->validate([
            'nome' => 'unique:ator'
        ]);

        $categoria = Categoria::create([
            'nome' => $request->input('nome'),
            Carbon::now(),
            Carbon::now()
        ]);

        $categoria->save();
        
        return redirect('/atores');
    }
}
