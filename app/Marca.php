<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = ['name', 'id'];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function produto(){
        return $this->hasMany('App\Produtos');
    }
}
