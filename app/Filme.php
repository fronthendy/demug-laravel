<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'filme';
    protected $primaryKey = 'filme_id';

    public function idioma(){
        return $this->hasOne(Idioma::class, 'idioma_id', 'idioma_id');
    }
    public function atores(){
        return $this->belongsToMany(Ator::class, 'filme_ator', 'filme_id', 'ator_id');
    }
}