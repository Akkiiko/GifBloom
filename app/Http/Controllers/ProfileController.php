<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(User $user) {
        return view('profile', ['user' => $user]);
    }
}
