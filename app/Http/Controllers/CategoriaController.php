<?php

namespace App\Http\Controllers;

use Illuminate\Support\MessageBag;
use Illuminate\Http\Request;
use App\Categoria;
use Carbon\Carbon;

class CategoriaController extends Controller
{
    public function read(){

        $categorias = Categoria::orderBy('nome', 'asc')->paginate(7);

        $arrayCategoria = [
            ['categoria_id' => '1', 'nome' => 'Terror'],
            ['categoria_id' => '2', 'nome' => 'Comédia'],
            ['categoria_id' => '3', 'nome' => 'Romance']
        ];

        $colecao = collect($arrayCategoria);
        // $colecao = $colecao->pluck('categoria_id');
        
        return view('categorias')->with('categorias', $categorias);

    }

    //GET
    public function create(){
        return view('categoriaCreate');
    }

    //POST
    public function createPost(Request $request){

        $request->validate([
            'nome' => 'unique:categoria'
        ]);

        $categoria = Categoria::create([
            'nome' => $request->input('nome'),
            Carbon::now(),
            Carbon::now()
        ]);

        $categoria->save();
        
        return redirect('/categorias');
    }

    public function edit($id){
        $categoria = Categoria::find($id);

        return view('categoriaEdit')->with('categoria', $categoria);
    }

    public function editPost(Request $request, $id){

        $request->validate([
            'nome' => 'unique:categoria|min:2|max:15'
        ]);

        $categoria = Categoria::find($id);

        $categoria->nome = $request->input('nome');

        $categoria->save();
        return redirect('/categorias');
    }

    public function delete($id){
        $categoria = Categoria::find($id);
        
        return view('categoriaDelete')->with('categoria', $categoria);
    }

    public function deletePost($id){
        $categoria = Categoria::find($id);

        $categoria->delete();

        return redirect('/categorias');
    }
}
