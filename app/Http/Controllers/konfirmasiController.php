<?php

namespace App\Http\Controllers;

use App\Models\konfirmasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class konfirmasiController extends Controller
{
    public function index(){
        $data =  DB::table('vouchers')->where('status', '=', 'Dikonfirmasi')->get();
        return view('konfirmasi', compact('data', 'status'));
    }
}
