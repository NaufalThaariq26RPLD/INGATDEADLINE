<?php

namespace App\Http\Controllers;

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
            $data1 = voucher::where('nama_voucher', 'like', '%' . request('search').'%')->orWhere('kategori', 'like', '%' .request('search') . '%')->get();
        }else{
            $data1 = voucher::get();
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
