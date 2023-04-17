<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //

    public function index_client(){

        $search = Voucher::latest();


        if(request('search')){
            $kategori = Kategori::where('Kategori', 'like' , '%'.request('search').'%')->first();
            $search = Voucher::where('nama_voucher', 'like', '%'. request('search') . '%');

            if($kategori !== null){
                $search->orWhere('kategori', $kategori->id);
            }

        }


        return view('client.dashboard', [
            'search' => $search->paginate(8),
            'latest' => Voucher::with('tokos')->latest()->paginate(10),
            'total_voucher' => voucher::where('status', 'dikonfirmasi')->get(),
        ]);
    }
}
