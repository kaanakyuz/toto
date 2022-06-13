<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        User::insert([
            0 => [
                'name' => 'Kaan Akyüz',
                'email' => 'kaan@gmail.com',
                'password' => Hash::make('1234'),
                'phone' => '5325148787',
            ] ,
            1 => [
                'name' => 'Pınar Akyüz',
                'email' => 'pinar@gmail.com',
                'password' => Hash::make('1234'),
                'phone' => '5348213407',
            ]
        ]);
    }
}
