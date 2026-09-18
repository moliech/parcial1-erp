<?php

namespace App\Models;

 use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'barcode',
        'name',
        'category',
        'sale_price',
        'current_stock',
        'min_stock'
    ];
}

