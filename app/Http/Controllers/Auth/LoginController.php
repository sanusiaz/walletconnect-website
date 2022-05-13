<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
    	return view('auth.login');
    }

    public function login( Request $request ) {
    	$this->validate($request, [
    		'email' => 'required|max:255',
    		'password' => 'required|min:5'
    	]);


    	// check if email address has been registrred with any email account
    	if ( User::where([
            'email' => $request->email,
            'verified' => 1
        ])->value('email') !== null ) {
    		$hashedPassword = User::where('email', $request->email)->value('password');
    		// chekc if typed password matches
    		if ( Hash::check($request->password, $hashedPassword) ) {
    			// login users here
                if ( auth()->attempt([
                    'email' => $request->email, 
                    'password' => $request->password
                ], $request->remember_me) ) {
    			     return redirect('/wallet/connect')->with('success', 'Connect your wallet to get started');
                }
                else {
                    return back()->with('error', 'An Error Occurred In Logging In Please Try Again Later');
                }

    		}
    		else {
    			return back()->with('error', 'Invalid Password Entered');
    		}
    	}
    	else {
    		return back()->with('error', 'Invalid Email Address  / Not Verified');
    	}
    }
}
