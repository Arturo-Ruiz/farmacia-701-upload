<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    public function Product(){
        return $this->hasMany(Product::class);
    }
}
