<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create the Admin User
        DB::table('users')->insert([
            'name' => 'Jason',
            'email' => 'jasonrothwell@hotmail.co.uk',
            'password' => Hash::make('JROadmin2020'),
        ]);

    }
}
