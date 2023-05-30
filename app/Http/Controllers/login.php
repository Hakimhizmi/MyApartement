<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    public function login(Request $request)
    {

        $info = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($info)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard.index')->with(['success'=>'Welcome, Admin! You are now logged in.']);
        } else {
            return back()->withErrors(['login'=>'Invalid Login!']);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('main.index')->withErrors(['login'=>'Goodbye, Admin! You have been successfully logged out.']);
    }
}
