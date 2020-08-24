<?php

use Illuminate\Database\Seeder;

class Rent_ads_ownerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Rent_ads_owner::class, 5)->create();
    }
}
