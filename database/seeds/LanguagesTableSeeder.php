<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LanguagesTableSeeder extends Seeder
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

            DB::table('languages')->insert([
                'id' => $i
            ]);
        }
    }
}
