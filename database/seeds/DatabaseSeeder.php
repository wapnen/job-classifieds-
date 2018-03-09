<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RegionTableSeeder::class);
        $this->call(District1TableSeeder::class);
        $this->call(District2TableSeeder::class);	
        $this->call(District3TableSeeder::class);
        $this->call(District4TableSeeder::class);
        $this->call(District5TableSeeder::class);
        $this->call(District6TableSeeder::class);
        $this->call(District7TableSeeder::class);
        $this->call(District8TableSeeder::class);
        $this->call(District9TableSeeder::class);
        $this->call(District10TableSeeder::class);
    }
}
