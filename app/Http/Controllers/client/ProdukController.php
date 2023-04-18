<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    //

    public function index(){

        $data = Voucher::latest();

        if(request('toko')){
            $data->where('toko', request('toko'));
        }
        return view('client.products', [
            'data' => $data->get()
        ]);
    }

    public function kode($id){
        dd('aa');
        $data = Voucher::where('id', $id)->first();

        $data2 = Voucher::where('toko', $data->toko)->get();
        return view('kode.kode_ace', [
            'data' => $data,
            'syarat' => explode(',', $data->syarat),
            'data2' => $data2
        ]);
    }
}
