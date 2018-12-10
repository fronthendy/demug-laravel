<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    protected $table = "ator";
    protected $primaryKey = 'ator_id';
    

    public function getNomeCompleto(){
        return $this->primeiro_nome . ' ' . $this->ultimo_nome;
    }
    
    public function filmes(){
        return $this->belongsToMany(Filme::class, 'filme_ator', 'ator_id', 'filme_id');
    }
}
