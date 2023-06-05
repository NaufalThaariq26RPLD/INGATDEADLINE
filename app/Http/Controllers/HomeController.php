<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Voucher;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //

    public function index_client(){

        $search = Voucher::where('masa_kadaluarsa','>',now())->latest();


        if(request('search')){
            $kategori = Kategori::where('Kategori', 'like' , '%'.request('search').'%')->first();
            $search = Voucher::where('nama_voucher', 'like', '%'. request('search') . '%')->whereDate('masa_kadaluarsa','>=',Carbon::now()->toDateString());

            if($kategori !== null){
                $search->orWhere('kategori', $kategori->id);
            }

        }


        return view('client.dashboard', [
            'searchs' => $search->paginate(8),
            'latest' => Voucher::with('tokos')->where('status', 'dikonfirmasi')->whereDate('masa_kadaluarsa','>=',Carbon::now()->toDateString())->latest()->paginate(10),
            'total_voucher' => Voucher::where('status', 'dikonfirmasi')->get(),
            'voucher_digunakan' => Voucher::where('status', 'dikonfirmasi')->sum('terlaris'),
            'user_aktif' => User::where('level', 'user')->get()
        ]);
    }
}
