<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        //attempt to login
        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Credentials do not match.'
            ]);
        }

        //if its ok then regenerate session
        request()->session()->regenerate();

        //redirect
        return redirect('/dashboard');
    }
}
