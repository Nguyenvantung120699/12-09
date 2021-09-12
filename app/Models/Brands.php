<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;

    protected $table = 'brands';

    protected $fillable = [
        'categories_id',
        'name',
        'logo',
        'status',
        'description',
    ];
    public function Categories(){
        return $this->belongsTo("\App\Models\Categories");
    }

}
