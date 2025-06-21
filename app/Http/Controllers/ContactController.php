<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $contact = Contact::create($request->all());
        return redirect()->back()->with('success', 'Contact created successfully');
    }
}
