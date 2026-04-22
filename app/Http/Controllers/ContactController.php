<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Contact::all();
        return view('contact.index', ['messages' => $messages]);
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'content' => ['required']
        ]);

        Contact::create($data);

        return redirect()->route('index')->with('status', 'Message sent successfully!');
    }
}
