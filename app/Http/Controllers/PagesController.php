<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Orderdetail;
use App\Product;
use App\Order;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	return view('welcome');
    }
    public function showproducts(Order $order)
    {
        // $details = $order->orderdetail()->product;
        $order->load('orderdetail.product');
        return view('pages.showproducts', compact('order'));
    }
    public function erroradmin()
    {
        return view('pages.erroradmin');
    }
    public function notifyproductadded()
    {
        return view('pages.notifyproductadded');
    }
    public function about()
    {
    	return view('pages.about'); 
    }
    public function shop()
    {
        $products = Product::all();

    	return view('pages.shop',compact('products')); 
    }   
    public function reviewitems()
    {
    	return view('pages.reviewitems'); 
    }
    public function processed()
    {
    	return view('pages.processed'); 
    }
    public function userprofile()
    {
        $user = Auth::user();
        $orders = $user->order;
        // $user->load('orders.orderdetails'); 
        // return $user;
    	return view('pages.userprofile', compact('user'), compact('orders'));
    }
    public function edituserprofile()
    {
        $user = Auth::user();
    	return view('pages.edituserprofile', compact('user'));
    }
    public function addnewproduct()
    {
        return view('pages.addnewproduct');
    }
}
