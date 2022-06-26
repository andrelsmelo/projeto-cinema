<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegis extends Model
{
    use HasFactory;

    //Define relação de classificações com Filmes
    public function movies()
    {
        return $this->belongsTo(Movies::class);
    }
}
