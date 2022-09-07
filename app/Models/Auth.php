<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model {

    protected $fillable = [
        'id',
        'auth_type',
        'password',
        'username'
    ];

    use HasFactory;
}
