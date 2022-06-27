<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sessions extends Model
{
    protected $fillable = ['session_hour'];

    use HasFactory;

    //Define relação de horarios com sessões
    public function moviesShown()
    {
        return $this->hasMany(MoviesShown::class, 'session_id');
    }
}
