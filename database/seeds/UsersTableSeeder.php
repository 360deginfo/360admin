<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => '360degreeinfo',
            'image'=>'avatar.png',
            'email' => '360degreeinfosupp19@gmail.com',
            'password' => Hash::make('client@360'),
        ]);
    }
}
