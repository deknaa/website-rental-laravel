<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|min:3|email',
            'password' => 'required|min:3',
        ]);

        if (Auth::attempt($validated)) {
            $user = Auth::user();

            // redirect by user role
            if ($user->role == 'user') {
                return redirect()->route('dashboard.user')->with('success', 'Berhasil login sebagai user');
            } elseif ($user->role == 'admin') {
                return redirect()->route('dashboard.admin')->with('success', 'Berhasil login sebagai admin');
            } else {
                return redirect()->route('auth.login')->with('error', 'Gagal login, email atau password salah!');
            }
        } else {
            return redirect()->route('auth.login')->with('error', 'Gagal login, email atau password salah!');
        }
    }
}
