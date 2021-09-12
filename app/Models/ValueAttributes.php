<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValueAttributes extends Model
{
    use HasFactory;

    protected $table = 'value_attributes';

    protected $fillable = [
        'products_id',
        'products_attributes_id',
        'gallery',
        'quantity',
        'price',
        'description',
    ];
}
