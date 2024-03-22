<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Add this import statement
use App\Models\User;
use App\Models\Page;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    function index()
    {
        if (Auth::check()) {
            return redirect('/admin/resume/dashboard');
        }
        return view('session.index');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)&& $user->isAdmin == true) {
            Auth::login($user); // Use Auth::login() to perform the login
            return redirect('/admin/resume/dashboard')->with('success', 'Login berhasil');
        } else {
            return redirect('/wpadmin-login')->withErrors('Email atau password salah');
        }
    }

    function logout()
    {
        Auth::logout(); // Use Auth::logout() to perform the logout
        return redirect('/wpadmin-login');
    }

    function register()
    {
        return view('session.register');
    }

    function createUser(Request $request)
    {

        // return $request;
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ],[
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->isAdmin = '0';
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Use Hash::make() to hash the password
        $user->save();

        return redirect('/wpadmin-login')->with('success', 'Registrasi berhasil');
    }
}

