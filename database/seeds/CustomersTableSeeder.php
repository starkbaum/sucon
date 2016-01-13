<?php

use Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100; $i++) {
            $faker = Faker::create();
            $customer = new \App\Customer();
            $customer->name = $faker->company;
            $customer->city = $faker->city;
            $customer->zipCode = $faker->postcode;
            $customer->street = $faker->streetAddress;
            $customer->email = $faker->companyEmail;
            $customer->phoneNo = $faker->phoneNumber;
            $customer->save();
        }
    }
}
