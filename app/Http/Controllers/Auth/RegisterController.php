<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request) {
        $request->session()->flash('show_register');

        $data = $request->validate([
            'registerEmail' => 'email|required|unique:users,email',
            'registerUsername' => 'min:3|max:32|required|unique:users,username',
            'registerPassword' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'username' => $data['registerUsername'],
            'email' => $data['registerEmail'],
            'password' => bcrypt($data['registerPassword']),
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }
}
