<?php

namespace App\Http\Controllers\client;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    //
    public function index (){
         return view('client.profil');
    }
    public function profiledit()
    {
        return view('client.profiledit');
    }
    
}
