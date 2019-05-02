<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Mail;
use App\Mail\NewContactRequest;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contactus');
    }

    public function mail(ContactRequest $request )
    {
        Mail::to('info@compassvoyage.com')->send(new NewContactRequest($request));
        return back()->with('status', 'Your message has been received.');
    }
}
