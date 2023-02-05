<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Schema\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // Validate the request
            $attributes = request()->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

        // Attempt to authenticate and log in the user
        // based on the provided credentials

        if (! auth()->attempt($attributes)) {
            // autn failed.
            throw ValidationException::withMessage([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();

        // redirect with a success flash message
        return redirect('/')->with('success', 'Welcome Back!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
