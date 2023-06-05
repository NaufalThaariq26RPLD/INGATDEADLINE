<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ClientFaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('client.faq', [
            'data' => Faq::where('status', 'Dikonfirmasi')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validasi = $request->validate([
            'email' => 'required',
            'message' => 'required'
        ]);

        $check = Faq::where('pertanyaan', $validasi['message'])->get();

        if($check->count() > 0){    
            return back()->with('success','Question Sudah Ada !!');


        }else if($check->count() < 1){
            Faq::create([
                'email' => $validasi['email'],
                'pertanyaan' => $validasi['message'],
                'answer' => null
            ]);
        return redirect('/faq');

        }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
        return view('client.coba2', [
            'data' => Faq::where('status', 'Belum Dikonfirmasi')->get(),
        ]);
    }

    public function show2($id)
    {
        //
        return view('client.coba', [
            'data' => Faq::where('id', $id)->first(),
        ]);
    }


    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq, $id)
    {
        //

        Faq::where('id', $id)->update([
            'answer' => $request['answer'],
            'status' => 'Dikonfirmasi'
        ]);

        return redirect('/faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        //
    }
}
