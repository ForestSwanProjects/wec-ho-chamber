<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    //one to one rel. where a car belongs to a team
    //get team the car belongs to
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    //one to many rel. where a race can have many cars
    //get race the car belongs to
    public function race()
    {
        return $this->belongsTo(Race::class);
    }
}
