<?php

use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('countries')->insert(
              [
                ['name' => "Россия"],
                ['name'=>"Беларусь"],
                ['name'=>"Грузия"],
                ['name'=>"Казахстан"],
                ['name'=>"Украина"],
                ['name'=>"Америка"],
                ['name'=>"Таджикистан"]
              ]

            );
    }
}
