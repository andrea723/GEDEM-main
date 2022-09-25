<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = [
            [
                'name'        => 'Lenier Rivas',
                'email'       => 'lenierrivas.rl@gmail.com',
                'password'    => Hash::make('lenierrivas.rl@gmail.com'),
                'avatar'      => 'logo-light.png',
            ],
        ]; 

        foreach( $user AS $array )
            User::create( $array );
    }
}