<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endpoint extends Model {
    

    protected $fillable = [
        'id',
        'transport',
        'aors', 
        'auth', 
        'context',
        'disallow',
        'allow',
        'direct_media',
        'callerid',
        'name',
        'department'
    ];

    use HasFactory;
}
