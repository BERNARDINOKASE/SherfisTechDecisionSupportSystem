<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Ramsey\Uuid\v1;

class AuthenticateController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function storeRegister(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
        ], [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Inputan bukan email.',
            'password.required' => 'Password wajib diisi.',
            'password.confirmed' => 'Konfirmasi password salah.',
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            event(new Registered($user));
            return to_route('login')->with('success', 'Akun anda berhasil dibuat!');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function storeLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            // 'password' => 'required|exists:users,password',
        ], [
            'email.required' => 'Eemail wajib diisi',
            'email.exists' => 'Email tidak terdaftar',
            'password.required' => 'Password wajib diisi'
        ]);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];
        Auth::attempt($login);
        return to_route('beranda');
    }
}
