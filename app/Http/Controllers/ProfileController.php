<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($username) {
        $user = User::where('username', $username)->first();
        
        if ($user === null) {
            return redirect('/');
        }

        return view('profile', ['user' => $user]);
    }
}
