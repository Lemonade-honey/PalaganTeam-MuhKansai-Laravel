<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Massage extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'massage_box',
        'massage_history',
        'status'
    ];
}
