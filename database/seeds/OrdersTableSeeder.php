<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
        	'order_id' => 1000,
        	'user_id' => 1000,
        ]);
        DB::table('orders')->insert([
        	'order_id' => 2000,
        	'user_id' => 1000,
        ]);
        DB::table('orders')->insert([
        	'order_id' => 3000,
        	'user_id' => 2000,
        ]);
    }
}
