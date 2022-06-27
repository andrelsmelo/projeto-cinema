<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rooms extends Model
{
    protected $fillable = ['name','capacity'];
    
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    use HasFactory;

    //Define relação de salas com sessões
    public function moviesShown()
    {
        return $this->hasMany(MoviesShown::class, 'room_id');
    }
}
