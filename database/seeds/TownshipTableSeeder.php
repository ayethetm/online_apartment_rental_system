<?php

use Illuminate\Database\Seeder;

class TownshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Township::class, 5)->create();
    }
}
