<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateMatrixController extends Controller
{
    public function calculate(Request $request){
        session_start();
        $data = $request->data;
        for ($i=0; $i < strlen($data) ; $i++) { 
           if($data[$i] == "/"){
            $data[$i] = "-";
           }
        session(['data'=>$data]);
        }
        session(['name'=>$request->name]);
        $_SESSION['data'] = $data;
        echo "<script>sessionStorage.setItem('data', '$data');</script>";
       if($request->from == 'fromhistory'){
        return redirect(route('paiddesc'));
       }
        return redirect(route('freedesc'));
    }
}
