<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Admint Asrul',
            'email' => 'muhasrul@fic18.com',
            'password' => Hash::make('laravel123'),
            'roles' => 'ADMINT',
            'phone' => '082296908912',
        ]); 
    }
}
