<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function loginView()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('nip','email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('dashboard');
        }

        // if (Auth::guard('admin')->attempt($credentials)) {
        //     return redirect()->route('dashboard');
        // }
    }
}