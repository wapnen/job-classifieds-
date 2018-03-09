<?php

use Illuminate\Database\Seeder;

class District8TableSeeder extends Seeder
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
            'name' => 'Bawku Municipal',
            'region_id' => 8
        ]);
        DB::table('districts')->insert([
            'name' => 'Bawku West',
            'region_id' => 8
        ]);
        DB::table('districts')->insert([
            'name' => 'Binduri',
            'region_id' => 8
        ]);
        DB::table('districts')->insert([
            'name' => 'Bolgatanga Municipal',
            'region_id' => 8
        ]);
        DB::table('districts')->insert([
            'name' => 'Bongo',
            'region_id' => 8
        ]);
        DB::table('districts')->insert([
            'name' => 'Builsa North',
            'region_id' => 8
        ]);
        DB::table('districts')->insert([
            'name' => 'Builsa South',
            'region_id' => 8
        ]);
        DB::table('districts')->insert([
            'name' => 'Garu-Tempane',
            'region_id' => 8
        ]);
        DB::table('districts')->insert([
            'name' => 'Kassena-Nankana',
            'region_id' => 8
        ]);
        DB::table('districts')->insert([
            'name' => 'Kassena Nankana West',
            'region_id' => 8
        ]);
        DB::table('districts')->insert([
            'name' => 'Nabdam',
            'region_id' => 8
        ]);
        DB::table('districts')->insert([
            'name' => 'Pusiga District',
            'region_id' => 8
        ]);
        DB::table('districts')->insert([
            'name' => 'Talensi',
            'region_id' => 8
        ]);
        DB::table('districts')->insert([
            'name' => 'Bolgatanga East District',
            'region_id' => 8
        ]);
        DB::table('districts')->insert([
            'name' => 'Tempane District',
            'region_id' => 8
        ]);
        
    }
}
