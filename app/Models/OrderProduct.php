<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $table = 'order_products';

    protected $fillable = [
        'orders_id',
        'products_id',
        'values_attribute_id',
        'price',
        'quantity',
        'total',
    ];
}
