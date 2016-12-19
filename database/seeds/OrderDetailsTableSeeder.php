<?php

use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orderdetails')->insert([
        	'order_id' => 1000,
        	'product_id' => 1000,
        	'quantity_ordered' => 2,
        	'price_each' => 20,
        ]);
        DB::table('orderdetails')->insert([
        	'order_id' => 1000,
        	'product_id' => 2000,
        	'quantity_ordered' => 2,
        	'price_each' => 30,
        ]);
        DB::table('orderdetails')->insert([
        	'order_id' => 2000,
        	'product_id' => 2000,
        	'quantity_ordered' => 2,
        	'price_each' => 30,
        ]);
        DB::table('orderdetails')->insert([
        	'order_id' => 3000,
        	'product_id' => 2000,
        	'quantity_ordered' => 2,
        	'price_each' => 20,
        ]);
    }
}