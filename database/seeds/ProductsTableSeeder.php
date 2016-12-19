<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'product_id' => 1000,
        	'product_name' => "Nicole",
        	'product_desc' => "Really charming and makulit",
        	'quantity_stock' => 1,
        	'buy_price' => 100,
        	'status' => "available"
        ]);
        DB::table('products')->insert([
        	'product_id' => 2000,
        	'product_name' => "Pug",
        	'product_desc' => "Really pugly",
        	'quantity_stock' => 20,
        	'buy_price' => 200,
        	'status' => "available"
        ]);
    }
}
