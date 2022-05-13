<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'sanusi abdulazeez',
        	'email' => 'sanusiabdulazeezadebayo1@gmail.com',
        	'password' => Hash::make('password')
        ]);
    }
}
