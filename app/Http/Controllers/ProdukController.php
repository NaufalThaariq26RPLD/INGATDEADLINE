<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    

    public function index(){

        $data = Voucher::whereDate('masa_kadaluarsa','>=',Carbon::now()->toDateString())->latest();

        if(request('toko')){
            $data->where('toko', request('toko'))->where('status', 'Dikonfirmasi')->whereDate('masa_kadaluarsa','>=',Carbon::now()->toDateString());
        }

        if(request('search')){
            $data->where('status', 'Dikonfirmasi')->where('nama_voucher', 'like', '%'. request('search') . '%')->whereDate('masa_kadaluarsa','>=',Carbon::now()->toDateString())->orWhere('deskripsi', 'like', '%'.request('search').'%');
        }

        if(request('kategori')){
            $data->where('status', 'Dikonfirmasi')->where('kategori', request('kategori'))->whereDate('masa_kadaluarsa','>=',Carbon::now()->toDateString());
        }
        return view('client.products', [
            'data' => $data->where('status', 'Dikonfirmasi')->paginate(1)
        ]);
    }

    public function kode($id){
        $data = Voucher::where('id', $id)->first();

        $data2 = Voucher::where('status', 'Dikonfirmasi')->where('toko', $data->toko)->get();
        return view('client.kode.kode_ace', [
            'data' => $data,
            'syarat' => explode(',', $data->syarat),
            'data2' => $data2
        ]);
    }
}
