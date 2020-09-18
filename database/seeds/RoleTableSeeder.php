<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('roles')->insert([
        	'name'=>'customer',
            'guard_name'=>'web'
        ]);

        DB::table('roles')->insert([
        	'name'=>'admin',
            'guard_name'=>'web'
        ]);
    }
    
}
