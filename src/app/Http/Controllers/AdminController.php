<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin', compact('contacts'));
    }
}
