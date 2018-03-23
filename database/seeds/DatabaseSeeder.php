<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $cars = factory(App\Car::class, 10)->create();
        $options = factory(App\Option::class, 30)->create();

        $cars->each(function ($car) use ($options) {
            $sync = $options->random(10);
            $car->options()->attach(
                $sync->pluck('id')->toArray()
            );
        });
    }
}
