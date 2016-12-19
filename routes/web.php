<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web']], function (){
	Route::get('/', 'PagesController@home');
	Route::get('about', 'PagesController@about');
	Route::get('userprofile', 'PagesController@userprofile');
	Route::get('edituserprofile', 'PagesController@edituserprofile');
	Route::get('shop', 'PagesController@shop');
	Route::get('reviewitems', 'PagesController@reviewitems');
	Route::get('processed', 'PagesController@processed');
	Route::get('erroradmin', 'PagesController@erroradmin');
	Route::get('addnewproduct', 'PagesController@addnewproduct')->middleware('admin');
	Route::post('products','ProductController@store');
	Route::get('notifyproductadded', 'PagesController@notifyproductadded');
	Route::post('/processcart','OrderdetailController@store');
	Route::get("/showproducts/{order}", 'PagesController@showproducts');
	Route::patch('editprofile','UserController@update');
	Auth::routes();
	Route::get('/home', 'HomeController@index');
});
