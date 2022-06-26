<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MoviesShown extends Model
{
    protected $fillable = ['session_date','room_id','session_id','movie_id','duration','end_of_session'];
    
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    use HasFactory;

    //Define relação de sessões com filmes
    public function movie()
    {
        return $this->belongsTo(Movies::class,'movie_id');
    }
    //Define relação de sessões com salas
    public function room()
    {
        return $this->hasOne(Rooms::class,'id', 'room_id');
    }
    //Define relação de sessões com horarios
    public function session()
    {
        return $this->hasOne(Sessions::class,'id', 'session_id');
    }
}
