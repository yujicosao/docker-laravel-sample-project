<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactSendmail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'title' => 'required',
            'body' => 'required',
        ]);
        $inputs = $request->all();

        return view('contact.confirm',['inputs' => $inputs,]);
    }


    
    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'title' => 'required',
            'body'  => 'required'
        ]);

        $action = $request->input('action');

        $inputs = $request->except('action');

        if($action != 'submit'){
            return redirect()
                ->route('contact.index')
                ->withInput($inputs);
        } else {
            \Mail::to($inputs['email'])->send(new ContactSendmail($inputs));

            $contact = new Contact;
            $contact->email = $request->input('email');
            $contact->title = $request->input('title');
            $contact->body = $request->input('body');
            $contact->save();

            $request->session()->regenerateToken();



            return view('contact.thanks');
        }

    }
}