<?php

use Illuminate\Database\Seeder;
use App\User as User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Paul Atreides',
            'email' => 'paul@atreides.ar',
            'password' => bcrypt('paulAtreides')
        ]);

        User::create([
            'name' => 'Juergen Kraßnig',
            'email' => 'kra16589@spengergasse.at',
            'password' => bcrypt('juergen')
        ]);

        User::create([
            'name' => 'King Mo',
            'email' => 'haf16570@spengergasse.at',
            'password' => bcrypt('mojtaba')
        ]);
    }
}
