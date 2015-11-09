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
            DB::table('courses')->insert([
                'id'            => $i,
                'name'          => $faker->sentence(rand(3,7)),
                'slug'          => $faker->slug,
                'description'   => $faker->sentence(rand(5,10))
            ]);
        }

    }
}
