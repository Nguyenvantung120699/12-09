<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'users_id',
        'grand_total',
        'status',
        'note',
        'province',
        'district',
        'wards',
        'village',
        'house_number',
        'phone_number',
    ];
}
