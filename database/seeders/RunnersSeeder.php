<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RunnersSeeder extends Seeder
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
        DB::table("runners")->insert([
                    "name" => $faker->name(),
                    "age" => $faker->numberBetween(1, 10),
                    "sex" => $faker->randomElement(["C", "G", "S", "F", "M"]),
                    "color" => $faker->randomElement(["Gr", "B", "CH", "Ro", "Br"]),
                    "race_id" => 1
                ]);
    }
}
