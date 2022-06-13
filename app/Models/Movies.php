<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = ['name', 'duration', 'pegi_id', 'poster', 'release', 'genre_id', 'sinopse'];
    use HasFactory;
}
