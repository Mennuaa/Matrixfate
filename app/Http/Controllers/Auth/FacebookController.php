<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Jetstream\Events\AddingTeam;
use Laravel\Socialite\Facades\Socialite;


class FacebookController extends Controller
{
    CONST DRIVER_TYPE = 'facebook';

    public function handleFacebookRedirect()
    {
        return Socialite::driver(static::DRIVER_TYPE)->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            
            $user = Socialite::driver('facebook')->stateless()->user();

            $userExisted = User::where('oauth_id', $user->id)->where('oauth_type', static::DRIVER_TYPE)->first();

            if( $userExisted ) {
                session(['user_name' => $userExisted->name]);
                Auth::login($userExisted);
                if(session('user_want_pay') == 'true'){
                    session()->forget('user_want_pay');
                    return redirect(route('checkout'));
                }
                return redirect()->route('dashboard');

            }else {
                
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'oauth_id' => $user->id,
                    'oauth_type' => static::DRIVER_TYPE,
                    'password' => Hash::make($user->id)
                ]);

                AddingTeam::dispatch($newUser);

                $newUser->switchTeam($team = $newUser->ownedTeams()->create([
                    'name' => $newUser->name . "'s Team",
                    'personal_team' => false
                ]));

                $newUser->update([
                    'current_team_id' => $newUser->id
                ]);
                session(['user_name' => $newUser->name]);
                Auth::login($newUser);
                if(session('user_want_pay') == 'true'){
                    session()->forget('user_want_pay');
                    return redirect(route('checkout'));
                }
                return redirect()->route('dashboard');
            }


        } catch (Exception $e) {
                       return redirect('/auth/signup')->with('emailExist', 'user with exact email exist');
        }

    }
}
