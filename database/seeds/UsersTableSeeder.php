<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => "Iya Wijangco",
        	'username' => "iyamete",
        	'id' => 1000,
        	'password' => bcrypt('cartman'),
        	'email' => "imwijangco@gmail.com",
        	'user_type' => 1,
        ]);

        DB::table('users')->insert([
        	'name' => "Nikki Wijangco",
        	'username' => "snikkiwi",
        	'id' => 2000,
        	'password' => bcrypt('oujisama02wi'),
        	'email' => "snikkiwi@gmail.com",
        	'user_type' => 0,
        ]);
    }
}
