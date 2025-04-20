<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|min:3|max:50',
            'email' => 'required|email|max:100',
            'message' => 'required|min:10|max:1000',
        ]);
        
        Contact::create($validated);
        
        return redirect()
            ->route('contact')
            ->with('success', 'Your message has been sent successfully!');
    }
    
    public function index()
    {
        $messages = Contact::latest()->get();
        return view('messages', compact('messages'));
    }
}