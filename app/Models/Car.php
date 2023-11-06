<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    /**
     * get team which belongs to car
     * 
     * relationship: one to one for a single car having a single team
     */
    public function team()
    {
        return $this->hasOne(Team::class);
    }

    /**
     * get race the car belongs to
     * 
     * relationship: one to many where a race can have many cars
     */
    public function race()
    {
        return $this->belongsTo(Race::class);
    }
}
