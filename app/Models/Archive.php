<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;
        protected $fillable = [
        'first_name',
        'last_name',
        'score',
        'chess_game'
    ];

    protected $table = 'archives';

    // Your model methods and relationships go here
}
