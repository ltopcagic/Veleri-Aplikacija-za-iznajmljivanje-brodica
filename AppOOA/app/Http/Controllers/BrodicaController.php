<?php

namespace App\Http\Controllers;

use App\Models\Brodica;
use Illuminate\Http\Request;

class BrodicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brodice=Brodica::latest()->get();  //prikaz svih dogadaji koje user nije attendao
        return view('pregledbrodica', compact('brodice'));
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
     * @param  \App\Models\Brodica  $brodica
     * @return \Illuminate\Http\Response
     */
    public function show(Brodica $brodica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brodica  $brodica
     * @return \Illuminate\Http\Response
     */
    public function edit(Brodica $brodica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brodica  $brodica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brodica $brodica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brodica  $brodica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brodica $brodica)
    {
        //
    }
}
