<?php

use Illuminate\Database\Seeder;

class District6TableSeeder extends Seeder
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
            'name' => 'Bole',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Bunkpurugu-Yunyoo',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Central Gonja',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Chereponi',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'East Gonja',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'East Mamprusi',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Gushegu',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Karaga',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Kpandai',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Kumbungu',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Mamprugo Moaduri',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Mion',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Nanumba North',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Nanumba South',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'North Gonja',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Saboba',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Sagnarigu',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Savelugu-Nanton',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Sawla-Tuna-Kalba',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Tamale Metropolitan',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Tatale Sangule',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Tolon',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'West Gonja',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'West Mamprusi',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Yendi Municipal',
            'region_id' => 6
        ]);
        DB::table('districts')->insert([
            'name' => 'Zabzugu',
            'region_id' => 6
        ]);
    }
}
