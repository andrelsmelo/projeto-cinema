<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movies extends Model
{
    protected $fillable = ['name', 'duration', 'pegi_id', 'poster','trailer', 'release', 'genre_id','tags', 'sinopse'];
    
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];

    use HasFactory;

    public function movieShown()
    {
        return $this->hasMany(MoviesShown::class,'movie_id');
    }

    public function pegi()
    {
        return $this->hasOne(Pegi::class,'id', 'pegi_id');
    }

    public function genre()
    {
        return $this->hasOne(Genre::class,'id', 'genre_id');
    }
}
