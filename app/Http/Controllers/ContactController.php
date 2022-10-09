<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function store(ContactRequest $request){
        /* Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]); */

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        Mail::to('test@contact.com')
            ->send(new ContactMail($contact));

        return redirect()->route('product.contact')
        ->with(['message' => 'お問い合わせが完了しました。', 'status'=> 'info']);
    }
}

