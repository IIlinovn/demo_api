<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'category_id' => 'integer',
    ];

    public function categoryFull()
    {
        return $this->belongsTo('App\ProductCategory', 'category_id');
    }

}
