<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        //validate the request
        $attributes = request()->validate([
            'mecanografico'     => 'required|digits_between:5,6',
            'password'  => 'required'
        ]);
        //attempt to authenticate and log in the user
        //based on the provided credentials
        //authentication fails

        if(!auth()->attempt($attributes, true)) {
            //auth failed
            ddd($attributes);
            throw ValidationException::withMessages([
                'email'  => 'Your provided credentials could not be verified.'
            ]);

                //another way of doing it
            //return back()->withInput()->withErrors(['email'  => 'Your provided credentials could not be verified.']);
        }
        //authentication succeeds

        //session fixation
        session()->regenerate();

        //redirect with a success flash message
        return redirect('/')->with('success','Welcome back!');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/login')->with('success', 'Goodbye, have a nice day!');
    }
}
