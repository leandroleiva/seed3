<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    private function data()
    {
        return [
            [
                'name'      => 'Leandro Leiva',
                'email'     => 'leandro.leivat@gmail.com',
                'password'  => Hash::make('123123'),
            ],
        ];
    }
    public function run(): void
    {
        $users = $this->data();
        foreach ($users as $user) {
            $exist_user = User::where('email', $user['email'])->first();
            if (!$exist_user) {
                User::create($user);
            }
        }
    }
}
