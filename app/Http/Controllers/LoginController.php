<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }   

    public function authenticated(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!empty($credentials['email']) && !empty($credentials['password'])) {
            $user = \App\Models\User::where('email', $credentials['email'])->first();
                
            if($user && Auth::attempt($credentials, $request->has('remember'))) {
                $request->session()->put('user', [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ]);
                $request->session()->regenerate();
                return redirect()->intended('/menu');
            } else {
                return redirect()->back()->withErrors(['Invalid credentials provided.']);
            }
        } else {
            return redirect()->back()->withErrors(['Invalid credentials provided.']);
        }
    }
}
