<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TokoController extends Controller
{
    public function index(){
        $toko=toko::all();
        return view('index', compact('toko'));

        $toko = resident::where('kategori_id', Auth::kategori()->id)->count();
    }

    public function index_client(){
        return view('client.toko', [
            'data' => Toko::get(),
        ]);
    }
}
