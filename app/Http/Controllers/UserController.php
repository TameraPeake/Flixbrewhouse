<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
/*
Common Resource Routes
Index - show all listings
Show - Show single listing
Create - show form to create new listing
Store - Store new Listing
Edit - show form to edit listing
Update - update edited listing
Destroy - delete listing

*/
    //show login form
    public function login() {
        return view('login');
    }

    //Authenticate user
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

    // echo var_dump(auth()->attempt($formFields));
        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/AdminHome')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email'=> 'Invalid Credentials'])->onlyInput('email');

    }
}
