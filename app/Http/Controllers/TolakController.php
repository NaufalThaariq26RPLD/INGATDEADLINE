<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\User;
use App\Models\Tolak;
use App\Models\Voucher;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TolakController extends Controller
{
    public function index(){
        $kategori=Kategori::all();
        $data = Voucher::where('status', '=','Ditolak')->get();
        $user= User::where('level','=','admin')->where('id','=',Auth()->user()->id)->first();
        $toko = Toko::where('id', $user->toko)->first();
        return view('tolak',  compact ('data','kategori','user','toko'));
    }

    public function tampil(Request $request, $id){
        $kategori=Kategori::all();
        $data = Tolak::find($id);
        return view('tampil', compact('data','kategori'));
    }

    public function update(Request $request, $id){
        $data = Tolak::find($id);
        $data->update($request->all());
        if($request->hasfile('gambar')){
            $request->file('gambar')->move('gambarvoucher/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('tolaks')->with('success','Data Berhasil Di Edit');
    }

    public function hapus($id){
        $data = Tolak::find($id);
        $data->delete();
        return redirect()->route('tolaks')->with('success','Data Berhasil Di Hapus');
    }

    public function panding(){
        $kategori=Kategori::all();
        $data =  Voucher::where('status','Menunggu')->get();
        return view('menunggu',  compact ('data','kategori'));
    }
}
