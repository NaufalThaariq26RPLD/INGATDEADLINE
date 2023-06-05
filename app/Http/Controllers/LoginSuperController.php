<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginSuperController extends Controller
{
    protected $username = 'username';
    protected $password = 'password';

    public function index(){
        return view('register');
    }
    public function registeruser(Request $request){
        $data=$request->validate([
            'username'=>'required|min:4|unique:users,username,except,id',
            'email'=>'required|email|min:4|unique:users,email,except,id',
            'password'=>'required|min:4',
            'confirm'=>'required|same:password'
        ]);
        $data['password']= Hash::make($data['password']);
        User::create($data);
        return redirect()->route('login');
    }
    public function login(){
        return view('login.login');
    }
    public function adminuser(){
        $kategori = Kategori::all();
        return view('adminuser',[
            'title'=>'Profil',
        ],compact('kategori'));
    }
    public function user(){
        return view('user',[
            'title'=>'Profil',
            'FAQ' => DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get(),
        ]);
    }
    public function loginuser(Request $request){
        $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)){
        // Authentication passed...
        $user = Auth::user();
        if($user->level === "admin"){
            return redirect()->intended('/admin/toko');
        }elseif($user->level === "superadmin"){
            return redirect()->intended('/superadmin');

        }elseif($user->level === "user"){
            return redirect()->intended('/dashboard');
        }
    }
    return redirect()->back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
    }
    public function logout(Request $request)
    {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
    }
}
