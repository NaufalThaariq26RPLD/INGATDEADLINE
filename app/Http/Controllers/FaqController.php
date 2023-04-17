<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    //

    public function index(){
        return view('faq', [
            'title' => 'FAQ',
            'data2' => Faq::where('status', 'Dikonfirmasi')->paginate(5),
            'data' => Faq::where('status', 'Menunggu')->get(),
        ]);
    }
    public function faq_admin(Faq $faq){
        return view('faq', [
            'title' => 'FAQ',
            'data' => Faq::where('status', 'Menunggu')->paginate(5),
            'data2' => Faq::where('status', 'Dikonfirmasi')->paginate(5),
            'FAQ' => $data = DB::table('faqs')
            ->orderBy('created_at', 'desc')
            ->paginate(5)

        ]);
    }

    public function store(Request $request)
    {
        //
        $validasi = $request->validate([
            'pertanyaan' => 'required'
        ]);

        $check = Faq::where('pertanyaan', $validasi['pertanyaan'])->get();

        if($check->count() > 0){
            return back()->with('success','Question Sudah Ada !!');


        }else if($check->count() < 1){
            Faq::create([
                'email' => Auth()->user()->email,
                'pertanyaan' => $validasi['pertanyaan'],
                'answer' => null
            ]);
        return redirect('/FAQ')->with('success', 'Faq Berhasil Untuk Dikirim');

        }
    }


    public function client_index(){
        return view('client.clientfaq', [
            'data' => Faq::where('status', 'Dikonfirmasi')->get()
        ]);
    }
    public function tampilfaq(Request $request,$id){
        $data = Faq::find($id);
        return view('faq_tampil',[
            'title' =>'Update FAQ',
            'FAQ' => DB::table('faqs')
            ->orderBy('created_at', 'desc')
            ->paginate(5),
        ],compact('data')); 
    }

    public function show($id)
    {
        //
        return view('faq_balas', [
            'title' => 'FAQ',
            'FAQ' => DB::table('faqs')
            ->orderBy('created_at', 'desc')
            ->paginate(5),
            'data' => Faq::where('id', $id)->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'answer'=>'required|min:5'
        ]);

        Faq::where('id', $id)->update([
            'answer' => $request->answer,
            'status' => $request->status,
        ]);

        return redirect('/faqs');
    }

    public function delete(Faq $faq){
        return view('faq_hapus', [
            'title' => 'faq',
            'data' => Faq::where('status', 'Dikonfirmasi')->get(),
        ]);
    }

    public function deletes($id){
        $faq = Faq::where('id', $id)->where('status', 'Dikonfirmasi')->get();


        if($faq->count() > 0){
            Faq::where('id', $id)->where('status', 'Dikonfirmasi')->delete();

            return back()->with('success','Berhasil Di Hapus');
        }
        else{
            return back()->with('error','Data Yang Akan Di Hapus Tidak Tersedia!!');
        }

    }

}
