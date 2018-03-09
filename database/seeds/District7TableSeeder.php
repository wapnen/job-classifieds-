<?php

use Illuminate\Database\Seeder;

class District7TableSeeder extends Seeder
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
            'name' => 'Ahanta West',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Aowin/Suaman',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Bia',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Bia East',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Bibiani/Anhwiaso/Bekwai',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Bodi',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Ellembelle',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Jomoro',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Juabeso',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Mpohor',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Mpohor/Wassa East',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Nzema East',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Prestea-Huni Valley',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Sefwi Akontombra',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Sefwi-Wiawso',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Sekondi-Takoradi Metropolitan',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Shama',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Suaman',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Tarkwa-Nsuaem Municipal',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Wasa Amenfi East',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Wasa Amenfi West',
            'region_id' => 7
        ]);
        DB::table('districts')->insert([
            'name' => 'Wasa Amenfi Central',
            'region_id' => 7
        ]);

    }
}
