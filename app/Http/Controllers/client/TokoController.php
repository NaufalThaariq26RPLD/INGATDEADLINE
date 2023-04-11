<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TokoController extends Controller
{
    //

    public function index(){
        return view('client.toko', [
            'data' => Toko::get(),
        ]);
    }
}
