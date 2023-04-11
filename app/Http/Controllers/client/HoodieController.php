<?php

namespace App\Http\Controllers;

use App\Models\Hoodie;
use Illuminate\Http\Request;

class HoodieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('client.admin.kategori.hoodie');

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
     * @param  \App\Models\Hoodie  $hoodie
     * @return \Illuminate\Http\Response
     */
    public function show(Hoodie $hoodie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hoodie  $hoodie
     * @return \Illuminate\Http\Response
     */
    public function edit(Hoodie $hoodie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hoodie  $hoodie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hoodie $hoodie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hoodie  $hoodie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hoodie $hoodie)
    {
        //
    }
}
