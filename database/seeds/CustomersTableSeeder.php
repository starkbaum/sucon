<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $treeleaf = new Customer();
        $treeleaf->name = 'Treeleaf Dev';
        $treeleaf->city = 'Wien';
        $treeleaf->zipCode = '1220';
        $treeleaf->street = 'Doningasse 20/2/1';
        $treeleaf->email = 'contact@treeleaf.dev';
        $treeleaf->phoneNo = '0660606060';
        $treeleaf->save();

        $spengergasse = new Customer();
        $spengergasse->name = 'HTL Spengergasse';
        $spengergasse->city = 'Wien';
        $spengergasse->zipCode = '1050';
        $spengergasse->street = 'Spengergassse 20';
        $spengergasse->email = 'contact@spengergasse.at';
        $spengergasse->phoneNo = '0660606060';
        $spengergasse->save();
    }
}
