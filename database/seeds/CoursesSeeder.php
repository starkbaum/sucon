<?php

use Illuminate\Database\Seeder;
use \App\Course;
use \Faker\Factory as Faker;
use \Faker\Provider\ as FProvider;

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
                'name'          => $faker->sentence(rand(1,6)),
                'slug'          => $faker->slug,
                'description'   => $faker->text
            ]);
        }

    }
}
