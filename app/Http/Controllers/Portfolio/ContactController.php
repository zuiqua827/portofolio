<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('portfolio.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        Mail::to(config('mail.to.address', 'ariljepara08@gmail.com'))
            ->send(new ContactMail(
                senderName:  $validated['name'],
                senderEmail: $validated['email'],
                messageBody: $validated['message'],
            ));

        return back()->with('success', 'Pesan Anda telah terkirim! Saya akan membalas secepatnya. 🙏');
    }
}

