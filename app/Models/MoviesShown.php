<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MoviesShown extends Model
{
    protected $fillable = ['session_date','rooms_id','sessions_id','movies_id','movie_duration','end_of_session'];
    
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    use HasFactory;
}
