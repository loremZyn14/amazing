<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amazing extends Model
{

    protected $fillable = [
        'name',
        'color',
        'test'
    ];

    use HasFactory;
}
