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
        $checkUser = User::where('email','ugwukelvintochukwu@gmail.com')->first();

        if(!$checkUser){

            User::create([
                'name'     => 'Tochukwu Ugwu',
                'email'     => 'ugwukelvintochukwu@gmail.com',
                'role_id'      => 1,
                'password'  => Hash::make('password'),
            ]);


        }
    }
}
