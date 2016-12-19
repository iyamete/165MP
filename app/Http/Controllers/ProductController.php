<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function store(Request $request)
    {
    	$product = new Product;
    	$product->product_desc = $request->product_desc;
    	$product->product_name = $request->product_name;
    	$product->quantity_stock = intval($request->quantity_stock);
    	$product->buy_price = intval($request->buy_price);
    	$product->status = $request->status;
    	$product->save();
    	
    	return redirect('/notifyproductadded');//make a page na nagsasabi na naadd na k
    	// return $request->all();
    }

}
