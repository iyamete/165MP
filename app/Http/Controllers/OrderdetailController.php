<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orderdetail;
use App\Product;
use App\User;
use App\Order;
use App\Submittedorder;
use Illuminate\Support\Facades\Auth;

class OrderdetailController extends Controller
{
    public function store(Request $request)
    {
    	$products = Product::all();
        $user = Auth::user();
        $order = new Order;
        $order->user_id = $user->id;
        $order->save();
		foreach ($products as $product){
			$puta = $product->product_name;
            $putaa = $product->product_id;
            // return intval((string)$request->$putaa);
			if ($request->$puta == "Yes")
				$orderdetail = new Orderdetail;
                $orderdetail->order_id = $order->order_id;
                $orderdetail->product_id = $product->product_id;
                $orderdetail->quantity_ordered = intval((string)$request->$putaa);
                $orderdetail->price_each = intval($product->buy_price);
                $orderdetail->save();
		}
        $submittedorder = new Submittedorder;
        $submittedorder->order_id = $order->order_id;
        $submittedorder->user_id = $order->user_id;
        $submittedorder->save();

        return redirect('/processed');

    }

}
