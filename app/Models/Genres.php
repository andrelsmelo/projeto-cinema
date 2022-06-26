<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    protected $fillable = ['name'];

    use HasFactory;

    public function movies()
    {
        return $this->belongsTo(Movies::class);
    }
}
