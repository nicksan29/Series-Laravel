<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

Class Seri extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'seasons',
        'gen',
        'image',
    ];
}