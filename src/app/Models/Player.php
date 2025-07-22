<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name',
        'age',
        'position',
        'club_id',
        'nationality',
        'height',
        'weight',
        'preferred_foot',
        'jersey_number',
    ];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
