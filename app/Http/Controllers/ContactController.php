<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(){
        return view('contact.usercontact');
    }
    public function send(){
        $data = request()->validate([
            'name' => 'required|min:3',
            'phonenumber' => 'required|numeric|digits:11',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);
        Mail::to('receipentemail@gmail.com')->send(new ContactUs($data));

        dd('send');
    }
}
