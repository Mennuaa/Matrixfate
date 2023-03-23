<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class RegisterController extends Controller
{
    public function signup(Request $request)
    {
        if (Auth::check()) {
            if(session('user_want_pay') == 'true'){
                session()->forget('user_want_pay');
                return redirect(route('checkout'));
            }
            return redirect('/dashboard');
        }
        // ]);
        if (User::where('email', $request->email)->exists()) {
            // session(['emailExist' => 'Пользователь с таким адресо email уже существут']);
            return back()->with('emailExist', 'User with exact email exist');
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if ($user) {
            Auth::login($user);
            session(['user_name' => $request->name]);
            session(['user_email' => $request->email]);
            if(session('user_want_pay') == 'true'){
                session()->forget('user_want_pay');
                return redirect(route('checkout'));
            }
            return redirect(route('dashboard'));
        }
        // session(['emailExist' => 'Пользователь с таким адресом email уже уществует']);
        return redirect('/auth/signup');

    }
    public function create(){
        if(Auth::check()){
            if(session('user_want_pay') == 'true'){
                session()->forget('user_want_pay');
                return redirect(route('checkout'));
            }
            return redirect(route('dashboard'));
         }
         return view('signup');
    }

}
