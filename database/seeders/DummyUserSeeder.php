<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData =[
            [
                'name'=> 'client Ariani',
                'email'=>'ariani@gmail.com',
                'role'=>'client',
                'password'=>bcrypt('123456')
            ],

            [
                'name'=> 'company Fara',
                'email'=>'fara@gmail.com',
                'role'=>'company',
                'password'=>bcrypt('123456')
            ],

        ];


        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
