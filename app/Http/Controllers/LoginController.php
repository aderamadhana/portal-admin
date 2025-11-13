<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function logout(Request $request)
    {
        // Perform logout logic here (e.g., invalidate session, clear cookies, etc.)
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }   
}
