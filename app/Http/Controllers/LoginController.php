<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = DB::table('users')->where('email', '=', $request->email)->get();
            if ($user[0]->role == 'admin') {
                return redirect()->to('dashboard');
            } else {
                return redirect()->intended('user2');
            }
        }

        return back()->withErrors([
            'email' => 'Kualifikasi yang diberikan tidak sesuai dengan data kami.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Anda berhasil logout');;
    }
}
