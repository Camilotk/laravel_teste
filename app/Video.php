<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [ 'nome', 'link', 'categoria_id', 'descricao'];
    /*
    public function categoria() 
    {
        return $this->hasOne('App\Categoria');
    }*/
}
