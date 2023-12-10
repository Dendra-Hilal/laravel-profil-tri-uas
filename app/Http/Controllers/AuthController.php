<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function create_user(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255',
        ]);

        $save = new User;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->password = bcrypt($request->password);

        $save->remember_token = \Illuminate\Support\Str::random(60);
        $save->remember_token = sha1($save->email);
        $save->save();

        Mail::to($save->email)->send(new RegisterMail($save, $save->id, $save->remember_token));
        return redirect("/login")->with('success', 'User has been created! Please verify your email address!');
    }

    public function authenticated(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }
        return back()->withErrors([
            'loginError' => 'Email atau password salah'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function verify($id, $remember_token, Request $request)
    {
        $save = User::findOrFail($id);

        if (!hash_equals((string) $remember_token, $save->remember_token)) {
            abort(403);
        }

        if ($save->hasVerifiedEmail()) {
            return redirect('/login')->with('info', 'Email already verified.');
        }

        $save->verified=true;
        $save->status=true;
        $save->markEmailAsVerified();
        event(new Verified($save));

        $isInputPage = $request->input('source') == 'admin_dashboard';

        if ($isInputPage) {
            return redirect('users')->with('success', 'User successfully edited!!');
        } else {
            return redirect('login')->with('success', 'Email verified. You can now log in.');
        }
    }

    public function notice(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : redirect()->route('login')->with('warning', 'Your Email account is not verified. Please verify your email address.');
    }
}
