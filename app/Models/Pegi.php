<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegi extends Model
{
    use HasFactory;

    public function pegi()
    {
        return $this->belongsTo(Movies::class);
    }
}
