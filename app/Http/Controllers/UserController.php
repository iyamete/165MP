<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class UserController extends Controller
{
	

    public function update(Request $request, User $user)
    {
    	$user = Auth::user();
    	$user->update($request->all());
    	return redirect('/userprofile');
    }
    // protected $redirectTo = '/userprofile';
}
