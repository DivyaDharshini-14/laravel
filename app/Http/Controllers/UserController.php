<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout()
    {
        return view('home');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerUser(Request $request)
    {
        $fields = $request->validate([
            'name' => ['required',],
            'email' => ['required', 'email',],
            'password' => ['required', 'min:8']
        ]);
        $fields['password'] = bcrypt($fields['password']);
        $user = User::create($fields);
        auth()->guard()->login($user);
        return redirect('/dashboard')->with('success', 'You have been registered');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $fields = $request->validate([
            'name' => ['required'],
            'password' => ['required', 'min:8']
        ]);
        if (auth()->attempt($fields)) {
            return redirect('/dashboard')->with('success', 'You have been logged in');
        }
        return back();
    }
}
