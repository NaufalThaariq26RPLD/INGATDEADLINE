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
            $data->where('toko', request('toko'))->where('status', 'dikonfirmasi');
        }

        if(request('search')){
            $data->where('status', 'dikonfirmasi')->where('nama_voucher', 'like', '%'. request('search') . '%')->orWhere('deskripsi', 'like', '%'.request('search').'%');
        }

        if(request('kategori')){
            $data->where('status', 'dikonfirmasi')->where('kategori', request('kategori'));
        }
        return view('client.products', [
            'data' => $data->where('status', 'dikonfirmasi')->paginate(1)
        ]);
    }

    public function kode($id){
        $data = Voucher::where('id', $id)->first();

        $data2 = Voucher::where('status', 'dikonfirmasi')->where('toko', $data->toko)->get();
        return view('client.kode.kode_ace', [
            'data' => $data,
            'syarat' => explode(',', $data->syarat),
            'data2' => $data2
        ]);
    }
}
