<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Logic to send the message
    }
    public function showContactForm()
    {
        return view('contact');
    }

    
}
