<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\User;
use App\Models\voucher;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\stdClass;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }       

    public function Chart(){
        $kategori=kategori::all();
        $voucher = Voucher::where('status','dikonfirmasi')->get();
        $voucher_best = Voucher::where('status', 'dikonfirmasi')->orderBy('views', 'DESC')->paginate(10);
        $toko_terlaris = Toko::orderBy('views', 'DESC')->paginate(10);
        $user= User::where('level','=','admin')->where('id','=',Auth()->user()->id)->first();
        $toko = Toko::where('id', $user->toko)->first();       

        //chart
        $diterima = Voucher::where('status', "Dikonfirmasi")->count();
        $ditolak = Voucher::where('status', "Ditolak")->count();
        $pending = Voucher::where('status', "Menunggu")->count();


        return view('dashboard',compact('kategori','voucher','user','toko','diterima','ditolak','pending', 'voucher_best', 'toko_terlaris'));
    }


    public function index_client(){

        $search = null;

        if(request('search')){
            $search = voucher::where('nama_voucher', 'like', '%'. request('search') . '%')->orWhere('kategori', 'like', '%' . request('search') . '%')->get();
        }


        return view('client.dashboard', [
            'search' => $search,
        
        ]);
    }

    public function store(Request $voucher) {
        $kategori = new kategori();
        $kategori->kategori = $voucher->voucher;
        $kategori->save();
        $kategori->tags()->sync($voucher->tags);
        return redirect('/kategori');
    }

    public function voucher(Request $request){
        $data = DB::table('vouchers')->where('status', '=', 'Dikonfirmasi')->get();
        $data2 = DB::table('vouchers')->where('status', '=', 'Ditolak')->get();
        return view('table.data_voucher',[
            'title'=>'Voucher',

        ],compact('data','data2'));

    }
    public function deletevoucher(Request $request,$id){
        $data = voucher::find($id);
        $data->delete();
        return redirect()->route('voucher');

    }
    public function validasi(Request $request){
        $data = DB::table('vouchers')->where('status','=', 'Menunggu')->get();
        return view('table.validasi',[
            'title'=>'Validasi',

        ],compact('data'));

    }
    public function tolak($id){
        $data=voucher::find($id);

        return redirect()->route('validasi');
    }
    public function updatetolak(Request $request,$id){
        $data = voucher::find($id);
        $data->update($request->all());
        return redirect()->route('validasi');

    }
    public function konfirmasi(Request $request,$id,$status){
        $data = voucher::find($id);
        $data->update([
            'status'=>$status
        ]);
        return redirect()->route('validasi');

    }
}
