<?php

use Illuminate\Database\Seeder;
use \App\Course;
use \Faker\Factory as Faker;

class CoursesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        for( $i = 1; $i <= 10; $i++) {

            Course::create([
                'name'          => $faker->sentence(rand(2,6)),
                'slug'          => $faker->slug(),
                'description'   => $faker->sentence(5,8)
            ]);
        }
    }
}
