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

        if(request('search')){
            $data->where('nama_voucher', 'like', '%'. request('search') . '%')->orWhere('deskripsi', 'like', '%'.request('search').'%');
        }
        return view('client.products', [
            'data' => $data->get()
        ]);
    }

    public function kode($id){

        $data = Voucher::where('id', $id)->first();

        $data2 = Voucher::where('toko', $data->toko)->get();
        return view('client.kode.kode_ace', [
            'data' => $data,
            'data2' => $data2
        ]);
    }
}
