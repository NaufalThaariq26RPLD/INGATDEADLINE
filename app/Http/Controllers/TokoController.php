<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\Voucher;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TokoController extends Controller
{
    public function index(){
        $toko=toko::all();
        return view('index', compact('toko'));

        $toko = resident::where('kategori_id', Auth::kategori()->id)->count();
    }

    public function index_client(){

        $data = Toko::latest();
        if(request('search') && request('kategori') ){
            $kategori = Voucher::select('toko')->where('kategori', request('kategori'))->get()->toArray();
            //to Array untuk mengubah data ke array associatif


            if($kategori !== null){
                $datas = implode(',', array_column($kategori, 'toko'));
                //menjadikan data array satu string yang di pisah dengan koma
                $final = explode(',', $datas);
                //memisahkan atau menjadikan ke array kembali data yang di implode , di potong berdasarkan koma
                $array_map = array_map('intval', $final);
                //menjadikan data string ke integer
                 $data->where('nama_toko', 'like', '%'.request('search').'%')->whereIn('id', $array_map);
                //whereIn .... query dengan data array
            }else{
                $data->where('nama_toko', 'like', '%'.request('search').'%')->where('id', null);
                
            }
        }elseif(request('search')){
            $data->where('nama_toko', 'like', '%'.request('search').'%');
        }elseif(request('kategori')){
            $v = Voucher::where('kategori', request('kategori'))->get()->toArray();

            if($v !== null){
                $d = implode(',', array_column($v, 'toko'));

                $final = explode(',', $d);

                $array_map = array_map('intval', $final);

                $data->whereIn('id', $array_map);
            }
        }

        return view('client.toko', [
            'data' => $data->paginate(5),
            'filter_toko' => Toko::get(),
            'kategori' => Kategori::get(),
        ]);
    }
}
