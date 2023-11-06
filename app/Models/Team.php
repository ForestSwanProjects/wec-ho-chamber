<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    /**
     * get car the team belongs to
     * 
     * relationship: one to one where a team belongs to a car
     */
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
