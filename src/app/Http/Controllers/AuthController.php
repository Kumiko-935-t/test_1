<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function register(RegisterRequest $request)
    {
        $form = $request->all();
        Contact::create($form);
        return redirect('/register');
    }
}