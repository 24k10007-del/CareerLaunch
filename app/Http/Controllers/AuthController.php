<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User; 

class AuthController extends Controller
{
    // show login form
    public function showLogin()
    {
        return view('auth.login');
    }

    public function registerAction(Request $request)
        {
            $request->validate([
                'username' => 'required|min:3|max:30|unique:users,username',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
                'repassword' => 'required|same:password'
            ]);

            
            $initial = strtoupper(substr($request->username, 0, 1));
            $avatar = "https://ui-avatars.com/api/?name={$initial}&background=f97316&color=fff&size=256";
            
            User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'name' => $request->username,   
                'avatar' => $avatar
            ]);

            return redirect()->route('login.form')->with('success', 'Account created! Please login.');
        } 


        public function login(Request $request)
        {
            $credentials = $request->validate([
                'email' => ['required','email'],
                'password' => ['required','string'],
            ]);

            $remember = $request->has('remember');

            if (Auth::attempt($credentials, $remember)) {
                $request->session()->regenerate();
                return redirect()->intended(route('dashboard'));
            }

            
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

    // logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.form');
    }
}