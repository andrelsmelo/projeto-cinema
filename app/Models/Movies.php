<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movies extends Model
{
    protected $fillable = ['name', 'duration', 'pegi_id', 'poster','trailer', 'release', 'genre_id','tags', 'sinopse'];
    
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];

    use HasFactory;
}
