<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
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
    public function store(ContactRequest $request)
    {
        $contact = Contact::create([

            "name"=> $request->name,
            "email"=> $request->email,
            "subject"=> $request->subject,
            "message"=> $request->message,
        ]);

        //return view('contact');
        return $request->name . ",send your message succesfuly";
        
    }

}
