<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Bernard',
                'email' => 'bernard@example.com',
                'password' => bcrypt('password')
            ]
        ];

        foreach ($data as $key) {
            User::create($key);
        }
    }
}
