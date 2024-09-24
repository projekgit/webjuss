<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = [
            [
            'id' =>1,
            'name'=> 'darajat',
            'email'=> 'darajat@gmail.com',
            'password'=> \bcrypt('darajat123'),
            'kategori_id' =>1,
            ],
            [
            'id' =>2,
            'name'=> 'darajat',
            'email'=> '123@gmail.com',
            'password'=> \bcrypt('darajat123'),
            'kategori_id' =>2,
            ]
        ];
        User::insert($user);
    }
    
}