<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = [
        'name',
        'city',
        'stadium',
        'founded_year',
        'coach_name',
    ];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
