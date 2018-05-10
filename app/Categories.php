<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['name'];

    protected $dates = ['created_ad', 'updated_at', 'deleted_at'];

    public function produtos(){
        return $this->belongsToMany('App\Produtos', 'categories_products');
    }
}
