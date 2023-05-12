<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Qujuan Miller',
                'username' => 'K-1',
                'email' => 'qujuanmiller@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active',
            ],
            //Vendor
            [
                'name' => 'Tism Design`z',
                'username' => 'TD',
                'email' => 'tismdesignz@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'vendor',
                'status' => 'active',
            ],
            //User or Customer
            [
                'name' => 'Courtney Turner',
                'username' => 'TwinzMom2014',
                'email' => 'cturner2686@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => 'active',
            ],
        ]);
    }
}
