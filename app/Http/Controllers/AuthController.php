<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->isAdmin()) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('user.dashboard');
    }

    public function postlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect('/dashboard');
            } elseif ($user->role === 'user') {
                return redirect()->route('user.dashboard');
            } else {
                return redirect()->route('login.admin')->with('message', 'Username or password incorrect');
            }
        } else {
            return redirect()->back()->withInput()->withErrors('Login failed');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Anda berhasil logout');
    }

    public function login()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('email', $google_user->email)->first();

            if ($user) {
                Auth::login($user);
                return redirect()->route('user.dashboard');
            } else {
                $new_user = User::create([
                    'name' => ucwords($google_user->name),
                    'email' => $google_user->email,
                    'email_verified_at' => now(),
                    'password' => bcrypt(Str::random(10)),
                    'remember_token' => Str::random(10),
                ]);

                Auth::login($new_user);
                return redirect()->route('user.dashboard');
            }
        } catch (\Throwable $th) {
            abort(404);
        }
    }

    public function logoutGoogle()
    {
        Auth::logout();
        return redirect('/')->with('message', 'Anda berhasil logout');
    }
}
