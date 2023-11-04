<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    //one to one rel. for a single team having a single car
    //get car which belongs to team
    public function car()
    {
        return $this->hasOne(Car::class);
    }
}
