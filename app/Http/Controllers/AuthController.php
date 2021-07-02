<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postLogin(Request $request)
    {
        // if (Auth::attempt($request->only('email','password'))) {
        //     return redirect('/dashboard');
        // }
        // return redirect('/login');
        // if(Auth::loginUsingId($siswa))
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::query()->where('email', $request->email)->first();
        if (!$user) {
            return back()->with([
                'status' => 'danger',
                'message' => 'User tidak ditemukan'
            ]);
        }
        if (!Hash::check($request->password, $user->password)) {
            return back()->with([
                'status' => 'danger',
                'message' => 'Password salah'
            ]);
        }
        Auth::loginUsingId($user->id);
        return redirect('/dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
