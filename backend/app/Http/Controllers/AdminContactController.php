<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at','desc')->get();

        return view('admin.contact-index',compact('contacts'));
    }
}
