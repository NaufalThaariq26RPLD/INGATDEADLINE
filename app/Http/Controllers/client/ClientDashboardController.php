<?php

namespace App\Http\Controllers;

use App\Models\voucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientDashboardController extends Controller
{
    //
    public function index(){

        $search = null;

        if(request('search')){
            $search = voucher::where('nama_voucher', 'like', '%'. request('search') . '%')->orWhere('kategori', 'like', '%' . request('search') . '%')->get();
        }
        return view('client.dashboard', [
            'search' => $search,
        ]);
    }
}