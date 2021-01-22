<?php

use Illuminate\Database\Seeder;
use App\User;
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
        $user = User::where('email','mithuncdas.cse@gmail.com')->first();
        if (is_null($user)) {
            User::insert([
                'name' => 'Mithun Das',
                'email' => 'mithuncdas.cse@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
        }
    }
}
