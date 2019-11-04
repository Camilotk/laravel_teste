<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function returnAll() {
        $categorias = Categoria::all();
        return $categorias;
    }

}
