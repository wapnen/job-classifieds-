<?php

use Illuminate\Database\Seeder;

class District4TableSeeder extends Seeder
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
            'name' => 'Abura/Asebu/Kwamankese',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Agona East',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Agona West Municipal',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Ajumako/Enyan/Essiam',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Asikuma/Odoben/Brakwa',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Assin North Municipal',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Assin South',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Awutu Senya East Municipal',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Awutu Senya West',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Cape Coast Metropolitan',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Effutu Municipal',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Ekumfi',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Gomoa East',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Gomoa West',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Komenda/Edina/Eguafo/Abirem Municipal',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Mfantsiman Municipal',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Twifo-Ati Morkwa',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Twifo/Heman/Lower Denkyira',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Upper Denkyira East Municipal',
            'region_id' => 4
        ]);
        DB::table('districts')->insert([
            'name' => 'Upper Denkyira West',
            'region_id' => 4
        ]);
    }
}
