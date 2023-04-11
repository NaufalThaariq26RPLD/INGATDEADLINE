<?php

namespace App\Http\Controllers;

use App\Models\Jaket;
use Illuminate\Http\Request;

class JaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('client.admin.kategori.jaket');

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jaket  $jaket
     * @return \Illuminate\Http\Response
     */
    public function show(Jaket $jaket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jaket  $jaket
     * @return \Illuminate\Http\Response
     */
    public function edit(Jaket $jaket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jaket  $jaket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jaket $jaket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jaket  $jaket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jaket $jaket)
    {
        //
    }
}
