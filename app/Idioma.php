<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table ='idioma';
    protected $primaryKey = 'idioma_id';
    protected $fillable = ['nome'];
    protected $dates = ['ultima_atualizacao'];

    public function filmes(){
        return $this->hasMany(Filme::class, 'idioma_id', 'idioma_id');
    }
}
