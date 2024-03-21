<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        return redirect('/');
    }
    public function showContactForm()
    {
        return view('contact');
    }

    
}
