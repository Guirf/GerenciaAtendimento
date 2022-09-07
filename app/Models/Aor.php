<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aor extends Model {

    protected $fillable = [
        'id',
        'max_contacts',
        'qualify_frequency'
    ];

    use HasFactory;
}
