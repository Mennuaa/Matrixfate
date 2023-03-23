<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
class LogoutController extends Controller
{
    public function logoutuser(){
        Session::flush();
        
        Auth::logout();
        session()->forget('user_name');
        session()->flush();
        return redirect(route('signup'));
    }
}
