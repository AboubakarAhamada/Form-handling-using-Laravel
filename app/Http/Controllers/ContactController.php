<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'bail | required | between:5,30|alpha',
            'mail' => 'bail |required |email',
            'message' => 'bail |required |max:250'
        ]);
        $contact = new \App\Models\Contact;
        $contact->nom = $request->nom;
        $contact->mail = $request->mail;
        $contact->message = $request->message;
        $contact->save();
        return view('confirm');
    }
}
