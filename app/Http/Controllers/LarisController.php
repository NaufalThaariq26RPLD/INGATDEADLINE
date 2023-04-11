<?php

namespace App\Http\Controllers;

use App\Models\Laris;
use Illuminate\Http\Request;

class LarisController extends Controller
{
    public function index(){
        $data = Laris::all();
        return view('datalaris', compact ('data'));
    }

    public function tambahlaris(){
        return view('tambahlaris');
    }

    public function insert(Request $request){
        $data = Laris::create($request->all());
        return redirect()->route('laris')->with('success','Data Berhasil Di Tambah');
    }
}
