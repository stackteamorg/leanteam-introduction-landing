<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
  /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $contacts = Contact::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "subject"=> $request->subject,
            "message"=> $request->message,
        ]);

        return "Message has been sent successfully!";
        
    }

}
