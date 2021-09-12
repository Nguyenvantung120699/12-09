<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersProfile extends Model
{
    use HasFactory;

    protected $table = 'users_profiles';

    protected $fillable = [
        'users_id',
        'user_name',
        'telephone',
        'avatar',
        'address',
        'story',
    ];
}
