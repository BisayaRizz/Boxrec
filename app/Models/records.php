<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class records extends Model
{
    use HasFactory;

    protected $fillable = [
        'boxer',
        'win',
        'lose',
        'draw',
        'ko',
        'bouts',
        'boxers_id'
    ];

}
