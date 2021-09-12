<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RateProducts extends Model
{
    use HasFactory;

    protected $table = 'rate_products';

    protected $fillable = [
        'users_id',
        'products_id',
        'value',
        'feelings',
    ];
}
