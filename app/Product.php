<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'category_id',
        'tax_id',
        'name',
        'price',
        'stock',
        'img',
        'checked'
    ];

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function Tax(){
        return $this->belongsTo(Tax::class);
    }
}
