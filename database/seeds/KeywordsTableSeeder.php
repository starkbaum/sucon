<?php

use App\Keyword;
use Illuminate\Database\Seeder;

class KeywordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Keyword::create([
            'name'  => 'Java'
        ]);
        Keyword::create([
            'name'  => 'PHP'
        ]);
        Keyword::create([
            'name'  => 'Laravel'
        ]);
        Keyword::create([
            'name'  => 'SAP'
        ]);
        Keyword::create([
            'name'  => 'C#'
        ]);
        Keyword::create([
            'name'  => 'Benutzerverwaltung'
        ]);
        Keyword::create([
            'name'  => 'Datenbank'
        ]);
        Keyword::create([
            'name'  => 'MySQL'
        ]);
        Keyword::create([
            'name'  => 'MongoDB'
        ]);
        Keyword::create([
            'name'  => 'Kursunterlage'
        ]);
        Keyword::create([
            'name'  => 'PDF'
        ]);
        Keyword::create([
            'name'  => 'Personalverrechnung'
        ]);
        Keyword::create([
            'name'  => 'Userverwaltung'
        ]);
        Keyword::create([
            'name'  => 'Kurs'
        ]);
        Keyword::create([
            'name'  => 'Test Driven Development'
        ]);
        Keyword::create([
            'name'  => 'JUnit'
        ]);
        Keyword::create([
            'name'  => 'PHPUnit'
        ]);
        Keyword::create([
            'name'  => 'Scala'
        ]);
        Keyword::create([
            'name'  => 'Eclipse'
        ]);
        Keyword::create([
            'name'  => 'IntelliJ IDEA'
        ]);

    }
}
