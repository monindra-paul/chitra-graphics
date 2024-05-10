<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function postContact(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'sub' => 'required',
            'message' => 'required'
        ]);

        // $contact = new Contact;
        // $contact -> name = $request['name'];
        // $contact -> email = $request['email'];
        // $contact -> subject = $request['subject'];
        // $contact -> query = $request['query'];
        // $contact -> save();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'sub' => $request->sub,
            'message' => $request->message,
        ];

        $createData = Contact::insert($data);

        if ($createData) {
            return redirect()->back()->with('success', 'Thank you for contacting us. We will get back to you soon.');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }
}
