<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ["name" => 'Admin',"email"	=> 'email-1@gmail.com',"password1" => Hash::make('password1')],
            ["name" => 'User',"email"	=> 'email-2@gmail.com',"password" => Hash::make('password2')],
            ];
        DB::table('users')->insert($users);
    }
}
