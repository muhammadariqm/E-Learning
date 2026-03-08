<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
        public function login(Request $request)
        {
            $credentials = $request->validate([
                'nim' => 'required',
                'password' => 'required'
            ]);
        
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
        
                if (Auth::user()->role === 'admin') {
                    return redirect()->route('admin.dashboard');
                }
        
                return redirect()->route('dashboard.index');
            }
        
            return back()->with('error', 'NIM atau password salah');
        }

        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/login');
        }

    public function register(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required|confirmed'
        ]);

        $user = new \App\Models\User();
        $user->nim = $request->nim;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login');
    }
}