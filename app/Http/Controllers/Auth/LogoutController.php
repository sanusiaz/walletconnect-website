<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout() 
    {
    	// check if the users is logged in
    	if ( auth()->user() ) {
    		auth()->logout();

    		return redirect('/login');
    	}
    }
}
