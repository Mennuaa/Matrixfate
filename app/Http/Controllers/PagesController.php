<?php

namespace App\Http\Controllers;
use App\Models\MatrixText;
use App\Models\Payment;
use Auth;
use Illuminate\Http\Request;
class PagesController extends Controller
{

    public function dashboard(){
        $user = Auth::user();
        $user_name = Auth::user()->name;
        $user_email =Auth::user()->email;
        session(['user_email'=>$user->email]);
        session(['user_name'=>$user->name]);
        if(session('user_want_pay') == 'true'){
            session()->forget('user_want_pay');
            return redirect(route('checkout'), compact('user'));
        }
        return view('dashboard', compact('user_name', 'user_email', 'user'));
    }
    public function homepage(){
        return view('app');
    }
    public function history(){
        $user = Auth::user();
        $payments = Payment::where("user_id", $user->id)->get();
        // dd($payments);
        return view('history', compact("user", "payments"));
    }
    public function freedesc(){
        $user = Auth::user();
        $matrixes = MatrixText::all();
        return view('freedesc' , compact('matrixes','user'));
    }
    public function paiddesc(){
        $user = Auth::user();
        $payments = Payment::where("user_id", $user->id)->get()->toArray();
        if($payments == []){
            return redirect('/');
        }
        return view("paiddesc", compact('user'));
    }
}
