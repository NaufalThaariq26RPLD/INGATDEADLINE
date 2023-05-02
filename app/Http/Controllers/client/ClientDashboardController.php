<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientDashboardController extends Controller
{
    //
    public function index(){

        $search = null;

        if(request('search')){
            $search = Voucher::where('nama_voucher', 'like', '%'. request('search') . '%')->orWhere('kategori', 'like', '%' . request('search') . '%')->whereDate('masa_kadaluarsa','>=',Carbon::now()->toDateString())->get();
        }
        return view('client.dashboard', [
            'search' => $search,
        ]);
    }
}
