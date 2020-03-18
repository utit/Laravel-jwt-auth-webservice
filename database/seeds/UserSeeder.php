<?php

use App\User;
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
        User::truncate();
        User::create(
            [
                'name' => 'Fulan Bin Fulan',
                'email' => 'fulan@tester.id',
                'password' => Hash::make('12345')
            ]
        );
    }
}
