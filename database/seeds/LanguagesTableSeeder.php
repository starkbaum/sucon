<?php

use App\Language;
use Illuminate\Database\Seeder;


class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'name' => 'Java'
        ]);
        Language::create([
            'name' => 'PHP'
        ]);
        Language::create([
            'name' => 'Ruby'
        ]);
        Language::create([
            'name' => 'ABAP'
        ]);
        Language::create([
            'name' => 'C#'
        ]);

    }
}
