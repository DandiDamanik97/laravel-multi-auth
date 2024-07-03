<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $userData = [
            [
                'name' => 'Dandi',
                'email' => 'dandi@gmail.com',
                'role' => 'superadmin',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Tornando',
                'email' => 'tornando@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Damanik',
                'email' => 'damanik@gmail.com',
                'role' => 'it',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach($userData as $key => $val) {
            User::create($val);

        }
    }
}
