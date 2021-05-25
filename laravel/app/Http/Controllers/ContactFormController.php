<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Contracts\Mail\Mailer;

class ContactFormController extends Controller
{

    public function contactform(Request $request)
    {

    	\Mail::send('emails.email', 
    	    [
		'name' => $request->input('fname'),   
		'email' => $request->input('email'),
		'content' => $request->input('message'), 
	    ], 
    		function (Message $message) use ($request) {
	        $message->to('support@augmented.com');
		$message->from('no-reply@augmented.com');
    		$message->subject('Contact Form: ' . $request->input('subject'));
    	});
	
	return back()->with('success', 'Contact Form Submitted Successfully');
    }
    public function contact()
    {
    	return view('contact');
    }
}
