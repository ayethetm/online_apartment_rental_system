<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // factory(App\Admin::class, 5)->create();
         // factory(App\Rent_ads_owner::class, 5)->create();
         // factory(App\Rental_list::class, 5)->create();
         // factory(App\Township::class, 5)->create();
         // factory(App\Type::class, 5)->create();
         // factory(App\User::class, 5)->create();

        $this->call([
        Rent_ads_owner::class,
        Rental_list::class,
        Township::class,
        Type::class,
        Admin::class,
        User::class,
    ]);

    }
}
