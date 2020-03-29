<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = ['title', 'anons', 'desc'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
