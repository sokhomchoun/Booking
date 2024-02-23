<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Laravel\Sanctum\PersonalAccessToken;

class UserController extends Controller
{
    public function Register(Request $request){
        $validate = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'sex' => $request->sex,
            'age' => $request->age,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ]);
        if($user){
            $authToken = $user->createToken('auth-token')->plainTextToken;
            Auth::login($user);
            return redirect(route('dashboard.index'))->with('access_token',$authToken);
        }
        else{
            return redirect(route('register'));
        }
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]); 
        if(Auth::attempt($credentials)){
           $user = User::where('email',$request->email)->first();
           $authToken = $user->createToken('auth-token')->plainTextToken;

           session(['token' => $authToken]);
            // return response()->json([
            //     'access_token' => $authToken,
            // ]);
            // return view('dashboard.dashboard', ['access_token' => $authToken]);
            return redirect(route('dashboard.index'))->with('access_token',$authToken);
        }
        return ['status' => false, 'message' => 'do not match record'];
    
    }
    public function testLogout(){
        Auth::logout();
        return redirect('/login');
    }

    public function getUsers(Request $request){
        return User::get();
    }
}
