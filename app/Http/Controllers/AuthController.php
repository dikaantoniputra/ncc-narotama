<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{

    public function index()
    {
        return view('admin.auth.index', ["title" => "Login"]);
    }


    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');

            }elseif (Auth::user()->role === 'tentor') {
                return redirect()->route('tentor.dashboard');

            } else {
                return redirect()->route('user.page.home');
            }
        }

        return redirect()->back()->withInput()->withErrors(['username' => 'email or password is invalid']);
    }


        public function logout()
        {
            Auth::logout();

            return redirect('/');
        }
}
