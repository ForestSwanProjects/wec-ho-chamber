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
        $c->save();

        $c1 = new Car;
        $c1->make = 'Oreca';
        $c1->model = '07';
        $c1->class = 'LMP2';
        $c1->save();

        Car::factory()->count(100)->create();
    }
}
