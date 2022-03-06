<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'name' => 'CEO',
            'email' => 'ceo@topdevelopers.com', 
            'password' => Hash::make('1234567890'), 
            'isAdmin' => 'y',
        ]); 

        User::firstOrCreate([
            'name' => 'Tech Recuiter',
            'email' => 'recruiter@topdevelopers.com', 
            'password' => Hash::make('1234567890'), 
            'isAdmin' => 'y',
        ]); 
    }
}
