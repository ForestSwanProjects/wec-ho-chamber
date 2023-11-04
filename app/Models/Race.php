<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    //one to many relationship for 1 race having many cars
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
