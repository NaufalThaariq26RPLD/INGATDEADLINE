<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $username = 'username';
    protected $password = 'password';

    public function login(){
        return view('login');
    }

    // public function login(Request $request){
    //     if(Auth::attempt($request->only('username','password')))
    //     {
    //         return redirect()->route('index');
    //     }
    //     return redirect('/login');
    // }
}
