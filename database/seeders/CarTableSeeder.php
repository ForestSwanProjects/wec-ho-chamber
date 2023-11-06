<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $c = new Car;
        $c->make = 'Toyota';
        $c->model = 'GR010';
        $c->class = 'Hypercar';
        $c->race_id = 1;
        $c->save();

        $c1 = new Car;
        $c1->make = 'Oreca';
        $c1->model = '07';
        $c1->class = 'LMP2';
        $c1->race_id = 1;
        $c1->save();

        $c2 = new Car;
        $c2->make = 'Porsche';
        $c2->model = '911 RSR';
        $c2->class = 'GTE';
        $c2->race_id = 1;
        $c2->save();

        //seed another 100 cars using car factory
        Car::factory()->count(100)->create();
    }
}
