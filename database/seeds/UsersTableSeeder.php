<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => "Motiur",
            'biography' => "Hello I am Motiur",
            'dob' => "02.01.1920",
            'phone' => "01717849968",
            'email' => "memotiur@gmail.com",
            'user_type' => "1",
            'password' => Hash::make('123456'),
        ]);

        \App\User::create([
            'name' => "Ovi Hasan",
            'biography' => "Hello I am Ovi Hasan",
            'dob' => "02.01.1920",
            'phone' => "123",
            'email' => "ovihasan074@gmail.com",
            'user_type' => "1",
            'password' => Hash::make('123456'),
        ]);

        \App\User::create([
            'name' => "Titas Ahmed",
            'biography' => "Hello I am Motiur",
            'dob' => "02.01.1920",
            'phone' => "1234",
            'email' => "titasahmedinfo@gmail.com",
            'user_type' => "1",
            'password' => Hash::make('123456'),
        ]);

        \App\User::create([
            'name' => "Rasib",
            'biography' => "Hello I am Rasib",
            'dob' => "02.01.1920",
            'phone' => "12345",
            'email' => "k.h.rasib@gmail.com",
            'user_type' => "1",
            'password' => Hash::make('123456'),
        ]);

        \App\User::create([
            'name' => "Jabed Sultan",
            'biography' => "Hello I am Sultan",
            'dob' => "02.01.1920",
            'phone' => "12345",
            'email' => "piasbd@gmail.com",
            'user_type' => "1",
            'password' => Hash::make('123456'),
        ]);

        \App\User::create([
            'name' => "Sayekat",
            'biography' => "Hello I am Sayekat",
            'dob' => "02.01.1920",
            'phone' => "12345",
            'email' => "sayekat6298@gmail.com ",
            'user_type' => "1",
            'password' => Hash::make('123456'),
        ]);

    }
}
