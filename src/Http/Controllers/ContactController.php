<?php

namespace Rafi\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Rafi\Contact\Models\Contact;
use Rafi\Contact\Mail\ContactMailable;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
