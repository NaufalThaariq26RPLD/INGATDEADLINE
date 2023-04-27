<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\User;
use App\Models\Voucher;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index(){
        $user= User::where('level','=','admin')->where('id','=',Auth()->user()->id)->first();
        $toko = Toko::where('id', $user->toko)->first();
        $kategori = kategori::all();
    
        if(request('search')){
            $data = voucher::where('nama_voucher', 'like', '%' . request('search').'%')->orWhere('kategori', 'like', '%' .request('search') . '%')->get();
        }else{
            $data = voucher::get();
        }
        $tittle = request('search');
        return view('kategori', compact('user','toko','data','kategori', 'tittle'));
        
    }
    public function status($status)
    {
        $data = Voucher::where('status',$status)->Get();
        return  view('kategori',['select'=>$status],compact('data'));
    }
    public function kategori($status)
    {
        $data=Kategori::all();
        // $kategori=DB::table('vouchers')->where('kategori','=',$kategori);

        if(request('search')){
            $data1 = voucher::where('nama_voucher', 'like', '%' . request('search').'%')->orWhere('kategori', 'like', '%' .request('search') . '%')->get();
        }else{
            $data1 = voucher::get();
        }
        if(request('status','search')){
            $data1 = Voucher::where('kategori', 'like', '%' . request('search').'%')->orWhere('status','like', '%' . request($status) . '%')->Get();
           
        }
        else{
            $data1 = Voucher::get();
        }


        return view('client.admin.kategori.kategori',[
            'data' => $data,
            'data1' => $data1,
            'data2' => $data1,
            'tittle' => request('search'),
            'select' => $status
    
    
        ]);
        // return view('admin.kategori.tablesgeneral', [
        //     'data' => Voucher::where('kategori', $kategori)
        // ]);

    }

    public function footer_kategori(){
     $data = kategori::get();
     
     return view('client.partials.footer', [
        'data_kategori' => $data
     ]);
    }
}
