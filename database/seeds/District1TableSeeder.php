<?php

use Illuminate\Database\Seeder;

class District1TableSeeder extends Seeder
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
            'name' => 'Adansi North',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Adansi South',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Afigya-Kwabre',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Ahafo Ano North',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Ahafo Ano South',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Amansie Central',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Amansie West',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Asante Akim Central Municipal',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Asante Akim North',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Asante Akim South',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Asokore Mampong Municipal',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Atwima Kwanwoma',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Atwima Mponua',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Atwima Nwabiagya',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Bekwai Municipal',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Bosome Freho',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Bosomtwe',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Ejisu-Juaben Municipal',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Ejura/Sekyedumase',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Kumasi Metropolitan',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Kwabre',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Mampong Municipal',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Obuasi Municipal',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Offinso Municipal',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Offinso North',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Sekyere Afram Plains',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Sekyere Central',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Sekyere East',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Sekyere Kumawu',
            'region_id' => 1
        ]);
        DB::table('districts')->insert([
            'name' => 'Sekyere South',
            'region_id' => 1
        ]);
        
    }
}
