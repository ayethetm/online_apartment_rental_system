<?php

use Illuminate\Database\Seeder;

class Rental_listTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Rental_list::class, 5)->create();
    }
}
