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

    //Define relações de filme com sessões
    public function moviesShown()
    {
        return $this->hasMany(MoviesShown::class,'movie_id');
    }
    //Define relações de filme com classificações
    public function pegi()
    {
        return $this->hasOne(Pegis::class,'id', 'pegi_id');
    }
    //Define relações de filme com generos
    public function genre()
    {
        return $this->hasOne(Genres::class,'id', 'genre_id');
    }
}
