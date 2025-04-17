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
        $users = [
            [
                'id' => '1',
                'name' => 'roree',
                'email' => 'contato@roree.com.br',
                'password' => Hash::make('passworduserai'),
                'usertype' => 'userAI'
            ],
                       
            [
                'id' => '2',
                'name' => 'roreeSAdmin',
                'email' => 'sadmin@roree.com.br',
                'password' => Hash::make('passwordsadmin'),
                'usertype' => 'SAdmin'                
            ],    
            
         
        ];

        User::insert($users);
    }
}











