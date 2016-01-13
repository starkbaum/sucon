<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //$this->call(UserTableSeeder::class);
        //$this->call(CoursesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);

        Model::reguard();
    }
}
