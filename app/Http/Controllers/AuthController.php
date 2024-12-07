<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Container\Attributes\Authenticated;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Redirect;

use function Laravel\Prompts\password;

class AuthController extends Controller
{
    function tampilRegistrasi() {
        return view('registrasi');
    }

    function submitRegistrasi(Request $request) {
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->save();
        //dd($user);
        return redirect()->route('Login.tampil');

    }

    function tampilLogin() {
        return view('login');
    }

    function submitLogin(Request $request) { 
     $data = $request->only('email', 'password');

     if (FacadesAuth::attempt($data)) {
        $request->session()->regenerate();
        return redirect()->route('home.tampil');
     } else {
        return redirect()->back()->with('gagal', 'Email atau password anda salah');
    }
}

    function home() {
        return view('home');
    }
    
}
