<?php

use Illuminate\Database\Seeder;

class District2TableSeeder extends Seeder
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
            'name' => 'Asunafo North Municipal',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Asunafo South',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Asutifi North',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Asutifi South',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Atebubu-Amantin',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Banda District',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Berekum Municipal',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Dormaa East',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Dormaa Municipal',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Dormaa West',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Jaman North',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Jaman South',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Kintampo North Municipal',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Kintampo South',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Nkoranza North',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Nkoranza South',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Pru',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Sene East',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Sene West',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Sunyani Municipal',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Sunyani West',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Tain',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Tano North',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Tano South',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Techiman Municipal DistricTechiman Municipal',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Techiman South',
            'region_id' => 2
        ]);
        DB::table('districts')->insert([
            'name' => 'Wenchi Municipal',
            'region_id' => 2
        ]);
        
    }
}
