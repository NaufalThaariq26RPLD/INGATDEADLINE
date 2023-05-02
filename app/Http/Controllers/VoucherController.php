<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\User;
use App\Models\Voucher;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class VoucherController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $data =  Voucher::where('status', '=', 'Dikonfirmasi')->get();
        $user = User::where('level', '=', 'admin')->where('id', '=', Auth()->user()->id)->first();
        $toko = Toko::where('id', $user->toko)->first();
        return view('datavoucher', compact('data', 'kategori', 'user', 'toko'));
    }

    public function tambahvoucher()
    {
        $kategori = Kategori::all();
        $user = User::where('level', 'admin')->where('id', Auth()->user()->id)->first();
        $toko = Toko::where('id', $user->toko)->first();
        return view('tambahvoucher', compact('kategori', 'user', 'toko'));
    }

    public function insertdata(Request $request)
    {
        $validateddata = $request->validate([
            'kode' => 'required|unique:vouchers,kode,',
            'nama_voucher' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'kuota' => 'required',
            'status' => 'required',
            'toko' => 'required',
            'syarat' => 'required',
            'masa_kadaluarsa' => 'required|date|after_or_equal:'.now(),
            'gambar' => 'file|image',

        ]);

        if ($files = $request->file('gambar')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.' . $extension;
            $files->move('gambarvoucher', $name);
        }

        $voucher = Voucher::create([
            'kode' => $request->kode,
            'nama_voucher' => $request->nama_voucher,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'kuota' => $request->kuota,
            'status' => $request->status,
            'toko' => $request->toko,
            'syarat' => $request->syarat,
            'masa_kadaluarsa' => $request->masa_kadaluarsa,
            'gambar' => $name,

        ]);


        // if($request->hasFile('gambar')){

        //     $logo = Storage::disk('public')->put('gambarvoucher',$request->file('gambar'));
        //     $data=([
        //         'kode'=>$request->kode,
        //         'nama_voucher'=>$request->nama_voucher,
        //         'deskripsi'=>$request->deskripsi,
        //         'kategori'=>$request->kategori,
        //         'kuota'=>$request->kuota,
        //         'status'=>$request->status,
        //         'toko'=>$request->toko,
        //         'syarat'=>$request->syarat,
        //         'masa_kadaluarsa'=>$request->masa_kadaluarsa,
        //         'gambar'=>$logo
        //     ]);
        //     $voucher->update($data);
        //     return redirect()->route('voucher');

        // }
        return redirect()->route('voucher')->with('success', 'Data Berhasil Di Tambah');
    }

    public function tampildata(Request $request, $id)
    {
        $kategori = Kategori::all();
        $data = Voucher::where('id', $id)->first();
        return view('tampildata', compact('data', 'kategori'));
    }

    public function updatedata(Request $request, $id)
    {
        $voucher = Voucher::find($id);





        // if($request->hasFile('gambar')){
        //     $data = DB::table('vouchers')->where('id',$id)->get();
        //     foreach($data as $datas){
        //     $logos = $datas->logo;
        //     Storage::delete('public/'.$logos);
        //     }

        //     $logo = Storage::disk('public')->put('gambarvoucher',$request->file('gambar'));
        //     $data=([
        //         'kode'=>$request->kode,
        //         'nama_voucher'=>$request->nama_voucher,
        //         'deskripsi'=>$request->deskripsi,
        //         'kategori'=>$request->kategori,
        //         'kuota'=>$request->kuota,
        //         'status'=>$request->status,
        //         'toko'=>$request->toko,
        //         'syarat'=>$request->syarat,
        //         'masa_kadaluarsa'=>$request->masa_kadaluarsa,
        //         'gambar'=>$logo
        //     ]);
        //     $voucher->update($data);
        //     return redirect()->route('voucher')->with('success','Data Berhasil Di Edit');

        // }
        if ($files = $request->file('gambar')) {
            $extension = $files->getClientOriginalExtension();
            $img = hash('sha256', time()) . '.' . $extension;
            $up = $files->move('gambarvoucher', $img);

            if ($up) {
                $image_db = Voucher::where('id', $id)->pluck('gambar')->first();
                $storage = public_path('gambarvoucher/' . $image_db);

                if (File::exists($storage)) {
                    unlink($storage);
                }
            }
        } else {
            $image_db = Voucher::where('id', $id)->pluck('gambar')->first();
            $img = $image_db;
        }


        Voucher::where('id', $id)->update([
            'gambar' => $img,
            'nama_voucher' => $request->nama_voucher,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'kuota' => $request->kuota,
            'link' => $request->link,
            'diskon' => $request->diskon
        ]);
        return redirect()->route('panding')->with('success', 'Data Berhasil Di Edit');
    }

    public function delete($id)
    {
        $voucher = Voucher::find($id);
        $data = DB::table('vouchers')->where('id', $id)->get();
        foreach ($data as $datas) {
            $logos = $datas->gambar;
            Storage::delete('public/' . $logos);
        }
        $voucher->delete();
        return redirect()->back()->with('success', 'Data Berhasil Di Hapus');
    }
}
