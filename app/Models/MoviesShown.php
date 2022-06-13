<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviesShown extends Model
{
    protected $fillable = ['session_date','rooms_id','sessions_id','movies_id','movie_duration'];

    use HasFactory;
}
