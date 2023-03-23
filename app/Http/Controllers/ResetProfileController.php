<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ResetProfileController extends Controller
{
    public function reset(Request $request, $id){
        $user = User::find($id);
        $email = User::where('email',$request->email)->first();
        if($email != null){
             return back()->with('emailExist', 'User with exact email exist');
        }
        if($request->password === $request->re_password){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->update();
            return back()->with('profileChangeSuccess', 'Profile has been updated successfully');
        }else if($request->password !== $request->re_password){
            return back()->with('notCorrectRePass', 'write correct password confirmation');
        }

    }
}
