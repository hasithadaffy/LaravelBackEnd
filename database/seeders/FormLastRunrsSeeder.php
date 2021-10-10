<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormLastRunrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        DB::table("form_last_runrs")->insert([
                    "runner_id" => 1,
                    "position" => "1/11",
                    "weight" => 1.3,
                    "number" => $faker->numberBetween(1, 10000),
                    "track" => $faker->name(),
                    "date" =>  $faker->date,
                    "category" => $faker->randomElement(["Handicap", "Flat", "Classic"]),
                    "stamina" =>$faker->randomElement(["Heavy 10", "Good", "Soft"]),
                    "fixed_odds_price" => $faker->numberBetween(1.5, 10),

                ]);
    }
}
