<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [ 'descricao', 'peso',
                            'preco', 'cor',
                            'marca_id'];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function marca(){
        return $this->belongsTo('App\Marca');
    }
}
