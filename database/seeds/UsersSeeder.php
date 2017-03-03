<?php

use App\User as User;
use Illuminate\Database\Seeder;

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
            'name'      => 'Patrick Jane',
            'email'     => 'jane@cbi.com',
            'password'  => bcrypt('patrickJane'),
            'is_admin'  => true,
        ]);

        User::create([
            'name'      => 'Teresa Lisbon',
            'email'     => 'lisbon@cbi.com',
            'password'  => bcrypt('teresaLisbon'),
            'is_admin'  => true,
        ]);

        User::create([
            'name'      => 'Juergen Kraßnig',
            'email'     => 'kra16589@spengergasse.at',
            'password'  => bcrypt('juergen'),
            'is_admin'  => true,
        ]);

        User::create([
            'name'     => 'King Mo',
            'email'    => 'haf16570@spengergasse.at',
            'password' => bcrypt('mojtaba'),
        ]);
    }
}
