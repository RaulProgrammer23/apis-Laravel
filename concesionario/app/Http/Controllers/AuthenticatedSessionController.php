<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//add
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request){
        
        $credentials = $request->validate([  // $credenciales // acortar esto al máximo x dios q todo no podemos
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if( ! Auth::attempt($credentials, $request->boolean('remember'))){
            echo "fail";  
        }

        $request->session()->regenerate();
        return redirect()->intended()->with('status','You are logged in ');

    }


    public function destroy(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')->with('status','You are logged out!');
        
    }



}
