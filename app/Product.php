<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'prodId';
    protected $fillable = ['catId','prodName','SKU','price'];
}
