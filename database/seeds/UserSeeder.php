<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hash::make itu untuk encrypt
        DB::table('users')->insert([
            'name' => 'marco',
            'email' => 'marco@gmail.com',
            'password' => Hash::make('12345')
        ]);
    }
}
