<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('backend.contact.index', compact('contacts'));
    }

    public function show($id)
    {

        $contacts = Contact::find($id);
        if (is_null($contacts)) {

            return redirect('index');
        } else {

            $data = compact('contacts');
            return view('backend.contact.show')->with($data);
        }
    }
}
