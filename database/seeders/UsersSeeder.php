<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullName' => 'John Doe',
            'email' => 'john@example.com',
            'age' => '>20',
            'gender' => 'male',
            'subscribed' => true
        ]);

        User::create([
            'fullName' => 'Jane Smith',
            'email' => 'jane@example.com',
            'age' => '20-60',
            'gender' => 'female',
            'subscribed' => false 
        ]);
    }
}
