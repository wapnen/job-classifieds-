<?php

use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('regions')->insert([
            'name' => 'Ashanti',
            'capital' => 'Kumasi'
        ]);
         DB::table('regions')->insert([
            'name' => 'Brong-Ahafo',
            'capital' => 'Sunyanyi'
        ]);
         DB::table('regions')->insert([
            'name' => 'Greater Accra',
            'capital' => 'Accra'
        ]);
         DB::table('regions')->insert([
            'name' => 'Central',
            'capital' => 'Cape Coast'
        ]);
         DB::table('regions')->insert([
            'name' => 'Eastern',
            'capital' => 'Koforidua'
        ]);
         DB::table('regions')->insert([
            'name' => 'Northern',
            'capital' => 'Tamale'
        ]);
         DB::table('regions')->insert([
            'name' => 'Western',
            'capital' => 'Sekondi-Takoradi'
        ]);
         DB::table('regions')->insert([
            'name' => 'Upper East',
            'capital' => 'Bolgatanga'
        ]);
    	DB::table('regions')->insert([
            'name' => 'Upper West',
            'capital' => 'Wa'
        ]);
        DB::table('regions')->insert([
            'name' => 'Volta',
            'capital' => 'Ho'
        ]);
    }
}
