<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request){
        $users = new users();
        $users-> IBM = $request->IBM;
        $users-> firstname = $request->firstname;
        $users-> lastname = $request->lastname;
        $users-> email = $request->email;
        $users-> password = Hash::make($request->password);

        $users->save();
        
        return redirect(route('login'));

    }
    public function login( Request $request){
        $credentials =[
            "email" => $request->email,
            "password"=> $request->password
        ];
        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials,$remember)){

            $request->session()->regenerate();

            return redirect()->intended(route('welcome'));
        }else{
            return redirect('login');
        }
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
