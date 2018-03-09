<?php

use Illuminate\Database\Seeder;

class District3TableSeeder extends Seeder
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
            'name' => 'Accra Metropolitan',
            'region_id' => 3
        ]);
        DB::table('districts')->insert([
            'name' => 'Ada East',
            'region_id' => 3
        ]);
        DB::table('districts')->insert([
            'name' => 'Ada West',
            'region_id' => 3
        ]);
        DB::table('districts')->insert([
            'name' => 'Adentan Municipal',
            'region_id' => 3
        ]);
        DB::table('districts')->insert([
            'name' => 'Ashaiman Municipal',
            'region_id' => 3
        ]);
        DB::table('districts')->insert([
            'name' => 'Ga Central Municipal',
            'region_id' => 3
        ]);
        DB::table('districts')->insert([
            'name' => 'Ga East Municipal',
            'region_id' => 3
        ]);
        DB::table('districts')->insert([
            'name' => 'Ga South Municipal',
            'region_id' => 3
        ]);
        DB::table('districts')->insert([
            'name' => 'Ga West Municipal',
            'region_id' => 3
        ]);
        DB::table('districts')->insert([
            'name' => 'Kpone Katamanso',
            'region_id' => 3
        ]);
        DB::table('districts')->insert([
            'name' => 'La Dade Kotopon Municipal',
            'region_id' => 3
        ]);
        DB::table('districts')->insert([
            'name' => 'La Nkwantanang Madina Municipal',
            'region_id' => 3
        ]);
        DB::table('districts')->insert([
            'name' => 'Ledzokuku-Krowor Municipal',
            'region_id' => 3
        ]);
        DB::table('districts')->insert([
            'name' => 'Ningo Prampram',
            'region_id' => 3
        ]);
        DB::table('districts')->insert([
            'name' => 'Shai Osudoku',
            'region_id' => 3
        ]);
        DB::table('districts')->insert([
            'name' => 'Tema Metropolitan',
            'region_id' => 3
        ]);
    }
}
