<?php

use Illuminate\Database\Seeder;

class SubmittedOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('submittedorders')->insert([
        	'order_id' => 1000,
        	'user_id' => 1000,
        ]);
        DB::table('submittedorders')->insert([
        	'order_id' => 3000,
        	'user_id' => 2000,
        ]);
    }
}
