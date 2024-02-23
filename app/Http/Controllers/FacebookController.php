<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    //
    public function facebookpage(){
        return Socialite::driver('facebook')->redirect();
    }
    public function facebooklogin(){
        try{
            $user = Socialite::driver('facebook')->user();
            $findUser = User::where('facebook_id',$user->id)->first();
            if($findUser){
                Auth::login($findUser);
             //   return redirect()->intended('dashboard');
                return redirect(route('dashboard.index'));
            }
            else{
                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'username' => $user->name,
                    'facebook_id' => $user->id,
                    'password' => encrypt('123456dummy')
                ]);
                Auth::login($newUser);
              //  return redirect()->intended('dashboard');
                return redirect(route('dashboard.index'));
            }
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
