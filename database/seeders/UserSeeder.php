<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.it',
                'password' => 'prova123prova',
            ],
        ];


        foreach ($users as $user) {
            $newUser = new User();
            $newUser->name = $user["name"];
            $newUser->email = $user["email"];
            $newUser->password = Hash::make('prova123prova');
            $newUser->save();
        }
    }
}
