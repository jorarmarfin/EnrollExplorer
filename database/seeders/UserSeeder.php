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
     */
    public function run(): void
    {
        User::Create([
            'name'=> 'Admin',
            'username'=> 'admin',
            'email'=> 'luis.mayta@gmail.com',
            'password'=> Hash::make('321654987'),
        ])->assignRole('admin');

        User::Create([
            'name'=> 'Sistemas',
            'username'=> 'sistemas',
            'email'=> 'sistemas@gmail.com',
            'password'=> Hash::make('321654987'),
        ])->assignRole('systems');

        User::Create([
            'name'=> 'prueba',
            'username'=> 'prueba',
            'email'=> 'prueba@gmail.com',
            'password'=> Hash::make('123456789'),
        ])->assignRole('others');

    }
}
