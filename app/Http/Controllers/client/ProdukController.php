<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    //

    public function index(){

        $data = Voucher::whereDate('masa_kadaluarsa','>=',Carbon::now()->toDateString())->latest();

        if(request('toko')){
            $data->where('toko', request('toko'));
        }
        return view('client.products', [
            'data' => $data->get()
        ]);
    }

    public function kode($id){

        $data = Voucher::where('id', $id)->whereDate('masa_kadaluarsa','>=',Carbon::now()->toDateString())->first();

        $data2 = Voucher::where('toko', $data->toko)->where('masa_kadaluarsa','>',now())->get();
        return view('kode.kode_ace', [
            'data' => $data,
            'syarat' => explode(',', $data->syarat),
            'data2' => $data2
        ]);
    }
}
