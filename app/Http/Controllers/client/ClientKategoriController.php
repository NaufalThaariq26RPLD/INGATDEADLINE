<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\voucher;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientKategoriController extends Controller
{
    public function kategori()
    {
        $data=Kategori::all();
        // $kategori=DB::table('vouchers')->where('kategori','=',$kategori);

        if(request('search')){
            $data1 = Voucher::where('nama_voucher', 'like', '%' . request('search').'%')->orWhere('kategori', 'like', '%' .request('search') . '%')->whereDate('masa_kadaluarsa','>=',Carbon::now()->toDateString())->get();
        }else{
            $data1 = Voucher::whereDate('masa_kadaluarsa','>=',Carbon::now()->toDateString())->get();
        }


        return view('client.admin.kategori.kategori',[
            'data' => $data,
            'data1' => $data1,
            'tittle' => request('search')


        ]);
        // return view('admin.kategori.tablesgeneral', [
        //     'data' => Voucher::where('kategori', $kategori)
        // ]);

    }
}
