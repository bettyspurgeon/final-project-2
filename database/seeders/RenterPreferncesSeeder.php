<?php

namespace Database\Seeders\RenterPrefernces;
use App\Models\User;
use Illuminate\Database\Console\Seeds;
use Illuminate\Database\Seeder;



class RenterPreferncesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
    }
}
