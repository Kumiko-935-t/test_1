<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('index',['contacts' => $contacts]);

    }

    public function create(ContactRequest $request)
    {
        $form = $request->all();
        Contact::create($form);
        return redirect('/');
    }

    public function confirm(ContactRequest $request)
    {
        //dd($request->all());
        $inputs = $request->all();
        return view('confirm', ['inputs' => $inputs]);
    }

    public function thanks()
    {
        return view('thanks');
    }
}
