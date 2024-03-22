<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; 

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        
        $contact = new Contact();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->message = $validatedData['message'];

       
        $contact->save();

   
        return redirect()->route('contact')->with('success', ' message has been sent');
    }

    public function showContactForm()
    {
        return view('contact');
    }
}

