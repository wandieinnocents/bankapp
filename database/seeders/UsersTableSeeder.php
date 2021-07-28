<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries

        DB::table('users')->insert([
            'first_name' => 'wandie',
            'last_name' => 'inocent',
            'email' => 'admin@admin.com',
            'phone_number' => '0706552255',
            'address' => 'kampala',
            'country' => 'kenya',
            'role' => 'admin_user',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'muheirwe',
            'last_name' => 'gili',
            'email' => 'user@user.com',
            'phone_number' => '0706552255',
            'address' => 'jokers',
            'country' => 'uganda',
            'role' => 'normal_user',
            'password' => Hash::make('password'),
        ]);
    }
}
