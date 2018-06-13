<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductMap extends Model
{
    protected $table = 'prodCatMap';
    protected $fillable = ['catId','prodId'];
}
