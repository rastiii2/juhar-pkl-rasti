<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaLoginController extends Controller
{
    public function login()
    {
        return view('auth.siswa_login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'nisn' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('siswa')->attempt($credentials)) {
            return redirect()->route('siswa.dashboard');
        }

        return back()->withErrors(['login_error' => 'NISN atau Password Salah.'])->onlyInput('nisn');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/siswa/login');
    }
}
