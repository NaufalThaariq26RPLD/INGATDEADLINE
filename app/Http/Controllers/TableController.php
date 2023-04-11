<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\Voucher;
use App\Models\user;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function index(){
        $kategori=Kategori::all();
        $voucher= Voucher::all();
        $user= DB::table('users')->where('level','=','user')->get();
        return view('dashboard',[
            'title'=>'dashboard',

        ],compact('kategori','voucher','user'));
    }
}
