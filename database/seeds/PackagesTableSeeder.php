<?php

use Illuminate\Database\Seeder;
use App\Package;
use Faker\Generator as Faker;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 30; $i++){
            $NewPackage = new Package();
            $NewPackage->title = $faker->words(4, true);
            $NewPackage->description = $faker->paragraph();
            $NewPackage->n_people = $faker->numberBetween(1, 5);
            $NewPackage->n_location = $faker->numberBetween(35, 355);
            $NewPackage->duration_days = $faker->numberBetween(1, 20);
            $NewPackage->validity_days = "494";
            $NewPackage->stars = $faker->randomFloat(1, 0, 5);
            $NewPackage->price = $faker->randomFloat(2, 60, 2000);
            $NewPackage->save();
        }

    }
}
