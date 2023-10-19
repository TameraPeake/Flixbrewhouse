<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use App\Models\User;

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

    //Show register/create form
    public function register() {
        return view('admin.register');
    }

    //Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'], //this means that it must be at least 3 characters
            'email' => ['required', 'email', Rule::unique('users', 'email')], // email is required, has to have email formation, and is unique to users table in email column
            'password' => 'required|confirmed|min:6' //if you use password_confirmation for the name for the confirmation field, then it will check if the email is confirmed
        ]);

        //hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create User
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in!');
    }

    //Authenticate user
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('admin/home')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email'=> 'Invalid Credentials'])->onlyInput('email');

    }

    //show adminHome
    public function adminHome() {
        return view('admin.home');
    }

    //user logout
    public function logout(Request $request) {
        auth()->logout(); //this removes the authentication info from user session

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out.');
    }

}
