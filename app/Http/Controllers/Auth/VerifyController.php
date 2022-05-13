<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class VerifyController extends Controller
{
    public function index( $vkey ) {
    	if ( $vkey !== "" ) {
    		// check if vkey exists in database
    		if ( User::where('vkey', $vkey)->first() !== null ) {
    			$user = User::where('vkey', $vkey)->first();

    			// set verified to 1
    			User::where('email', $user->email)->update([
    				'verified' => 1,
    				'vkey' => Str::random(30)
    			]);

    			return redirect('/login')->with('success', 'Your Account Has Been Verified Successfully');
    		}
    		else {
    			return "Verification Key not found / has been used";
    		}
    	}
    	else {
    		return "Verification Key cannot be empty";
    	}
    }
}
