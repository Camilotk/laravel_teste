<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nome', 'slug'];

    public function videos()
    {
        return $this->hasMany('App\Video');
    }
}
