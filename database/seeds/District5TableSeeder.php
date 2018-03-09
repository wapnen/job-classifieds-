<?php

use Illuminate\Database\Seeder;

class District5TableSeeder extends Seeder
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
            'name' => 'Akuapim North Municipal',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Akuapim South',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Akyemansa',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Asuogyaman',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Atiwa',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Ayensuano',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Birim Central Municipal',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Birim North',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Birim South',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Denkyembour',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'East Akim Municipal',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Fanteakwa',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Kwaebibirem',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Kwahu Afram Plains North',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Kwahu Afram Plains South',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Kwahu East',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Kwahu South',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Kwahu West Municipal',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Lower Manya Krobo',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'New-Juaben Municipal',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Nsawam Adoagyire Municipal',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Suhum Municipal',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Upper Manya Krobo',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Upper West Akim',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'West Akim Municipal',
            'region_id' => 5
        ]);
        DB::table('districts')->insert([
            'name' => 'Yilo Krobo',
            'region_id' => 5
        ]);
    }
}
