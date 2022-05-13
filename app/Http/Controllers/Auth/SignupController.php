<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterUsersMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SignupController extends Controller
{
    public function index()
    {
    	return view('auth.register');
    }

    public function store( Request $request ) {
    	// validate request
    	$this->validate($request, [
    		'username' => 'required|max:255',
    		'email' => 'email|required|max:255',
    		'password' => 'required|min:5'
    	]);


    	// check if email does not exists
    	if ( !User::where('email', $request->email)->first() ) {


            $vkey = Str::random(30);
            // create new users info
            User::create([
                'name' => $request->username,
                'email' => $request->email, 
                'password' => Hash::make($request->password),
                'verified' => 0,
                'vkey' => $vkey,
                'users_ref' => Str::random(20)
            ]);

            $details = [
                'name' => $request->username,
                'email' => $request->email,
                'message' => 'Your Account has been created successfully.',
                'verification_link' => "http://localhost:8006/verify/{$vkey}"
            ];

            $usersVerificationKey = Str::random(20);

            Mail::to($request->email)->send( new RegisterUsersMail($details) );
    		
            return back()->with('success', 'A Verification Mail Has Been Sent To Your Mail');
    	}
    	else {
    		return back()->with('error', 'An Account Exists With Email Address.');
    	}
    	
    }
}
