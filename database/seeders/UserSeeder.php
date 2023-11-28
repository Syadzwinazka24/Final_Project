<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert(array(
            array(
                'name' => 'Admin',
                'username' => 'Admin',
                'email'=> 'admin@gmail.com',
                'password' => Hash::make('bismillah'),
                'role'=> 1
            ),
            array(
                'name' => 'Petugas',
                'username' => 'Petugas',
                'email'=> 'petugas@gmail.com',
                'password' => Hash::make('bismillah'),
                'role'=> 2
            ),
        ));
    }
}
