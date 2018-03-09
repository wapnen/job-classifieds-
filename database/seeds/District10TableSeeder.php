<?php

use Illuminate\Database\Seeder;

class District10TableSeeder extends Seeder
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
            'name' => 'Adaklu District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Afadjato South District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Agotime Ziope District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Akatsi North District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Akatsi South District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Biakoye District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Central Tongu District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Ho Municipal',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Ho West District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Hohoe Municipal',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Jasikan District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Kadjebi District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Keta Municipal',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Ketu North District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Ketu South Municipal',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Kpando Municipal District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Krachi East District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Krachi Nchumuru District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Krachi West District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Nkwanta North District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'Nkwanta South District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'North Dayi District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'North Tongu District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'South Dayi District',
            'region_id' => 10
        ]);
        DB::table('districts')->insert([
            'name' => 'South Tongu District',
            'region_id' => 10
        ]);
    }
}
