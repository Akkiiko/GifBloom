<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->session()->flash('show_login');

        $data = $request->validate([
            'email' => 'email|required|exists:users,email',
            'password' => 'required'
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        $request->session()->flash('password');
        return redirect()->route('home')->withErrors($data, 'login')->withInput();
    }
}
