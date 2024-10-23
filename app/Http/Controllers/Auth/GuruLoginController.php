<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuruLoginController extends Controller
{
    public function login()
    {
        return view('auth.guru_login');
    }
}
