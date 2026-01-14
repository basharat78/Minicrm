<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
                [
                    'name' => 'User',
                    'email' => 'User@gmail.com',
                    'password' => Hash::make('User123'),
                    
                ]);   
    }
}
