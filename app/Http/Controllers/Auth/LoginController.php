<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class LoginController extends Controller
{
    public function create()
    {
        return Inertia::render('Auth/Login');
    }

    public function loginProcess(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(!Auth::attempt($data, $request->boolean('emember'))){
            return back()->withErrors([
                'email' => 'Email or password Invalide',
            ]);

           $request->sesion()->regenerate();


        }
         return redirect('/dashboard')->with('success', 'Login Successfully');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        return redirect('/login')->with('success', 'Logout success');
    }

}
