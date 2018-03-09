<?php

use Illuminate\Database\Seeder;

class District9TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('districts')->insert([
            'name' => 'Daffiama Bussie Issa',
            'region_id' => 9
        ]);
        DB::table('districts')->insert([
            'name' => 'Jirapa/Lambussie',
            'region_id' => 9
        ]);
        DB::table('districts')->insert([
            'name' => 'Lambussie Karni',
            'region_id' => 9
        ]);
        DB::table('districts')->insert([
            'name' => 'Lawra',
            'region_id' => 9
        ]);
        DB::table('districts')->insert([
            'name' => 'Nadowli',
            'region_id' => 9
        ]);
        DB::table('districts')->insert([
            'name' => 'Nandom',
            'region_id' => 9
        ]);
        DB::table('districts')->insert([
            'name' => 'Sissala East',
            'region_id' => 9
        ]);
        DB::table('districts')->insert([
            'name' => 'Sissala West',
            'region_id' => 9
        ]);
        DB::table('districts')->insert([
            'name' => 'Wa East',
            'region_id' => 9
        ]);
        DB::table('districts')->insert([
            'name' => 'Wa Municipal',
            'region_id' => 9
        ]);
        DB::table('districts')->insert([
            'name' => 'Wa West',
            'region_id' => 9
        ]);
    }
}
