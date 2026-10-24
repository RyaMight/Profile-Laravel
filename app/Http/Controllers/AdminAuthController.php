<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        if (session('admin_authenticated')) {
            return redirect()->route('admin.certificates.index');
        }

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $username = config('admin.username');
        $password = config('admin.password');

        $usernameOk = $username && hash_equals($username, $request->username);
        $passwordOk = $password && hash_equals($password, $request->password);

        if (! $usernameOk || ! $passwordOk) {
            return back()->withErrors(['username' => 'Username atau password salah!'])->onlyInput('username');
        }

        session(['admin_authenticated' => true]);
        $request->session()->regenerate();

        return redirect()->route('admin.certificates.index');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('profile');
    }
}
