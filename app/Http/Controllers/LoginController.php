<?php

namespace App\Http\Controllers;

use Cookie;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    public function login(Request $request){
        if(Auth::check()){
            return redirect('/dashboard');
        }
        $user = User::where('email', $request->email);
        if(!(User::where('email', $request->email))->first()){
            return back()->with('notCorrectEmail', 'User with exact email exist');
        }

        $formFields = $request->only(['email', 'password']);
        if(Auth::attempt($formFields)){
            session(['user_name' => $user->first()['name']]);
            session(['user_email' => $user->first()['email']]);
            session(['user_id' => $user->first()['id']]);
            if(session('user_want_pay') == 'true'){
                session()->forget('user_want_pay');
                return redirect(route('checkout'));
            }
            return redirect(route('dashboard'));
        }
        if($user->first() != null){
            if($user->first()['password'] != $request->password){
                return back()->with('notCorrectPass', 'Not correct password');
            }
        }
        return redirect('/auth/signup')->withErrors([
            'email' => 'Not correct password'
        ]);
    }
}
