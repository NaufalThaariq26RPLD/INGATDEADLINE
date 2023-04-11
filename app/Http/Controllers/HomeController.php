<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index_client(){

        $search = null;

        if(request('search')){
            $search = Voucher::where('nama_voucher', 'like', '%'. request('search') . '%')->orWhere('kategori', 'like', '%' . request('search') . '%')->get();
        }
        return view('client.dashboard', [
            'search' => $search,
        ]);
    }
}
