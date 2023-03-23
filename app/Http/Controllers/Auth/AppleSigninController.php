<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GeneaLabs\LaravelSocialiter\Facades\Socialiter;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AppleSigninController extends Controller
{

    public function login()
    {
        session(['user_name' => "apple_user"]);
        if(session('user_want_pay') == 'true'){
            
             Socialite::driver("sign-in-with-apple")
            ->scopes(["name", "email"]);
            session(['user_want_pay' =>'true']);
            return view('payment');
        }
        return Socialite::driver("sign-in-with-apple")
            ->scopes(["name", "email"])
            ->redirect(route('dashboard'));
    }

    public function callback(Request $request)
    {
      try{
        $user = Socialite::driver("sign-in-with-apple")
            ->user();
      $userExisted = User::where('oauth_id', $user->id)->where('oauth_type', 'apple')->first();

            if( $userExisted ) {
                session(['user_name' => "apple_user"]);
                Auth::login($userExisted);
                       if(session('user_want_pay')== 'true'){
                            session(['user_want_pay' =>'true']);
                            return redirect()->route('checkout');
                       }
                    return redirect()->route('dashboard');

            }else{
        
      			if($user->nickname == null || $user->nickname == ""){
				$user->nickname = $user->email;
      			}
     			 $newUser = User::create([
                    'name' => $user->nickname,
                    'email' => $user->email,
                    'oauth_id' => $user->id,
                    'oauth_type' => 'apple',
                    'password' => Hash::make($user->id)
                ]);
                session(['user_name' => $newUser->email]);
      			 Auth::login($newUser);
      			   if(session('user_want_pay')== 'true'){
      			       session(['user_want_pay' =>'true']);
                            return redirect()->route('checkout');
                       }
            	return redirect(route('dashboard'));
    				}
    			}catch (Exception $e) {
                    return redirect('/auth/signup')->with('emailExist', 'user with exact email exist');
                }
    }
}