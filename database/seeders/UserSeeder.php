<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = config('users');

        foreach ($users as $user) {
            $newUser = new User();
            $newUser->password = Hash::make('prova123prova');
            $newUser->fill($user)->save();
        };
    }
}
