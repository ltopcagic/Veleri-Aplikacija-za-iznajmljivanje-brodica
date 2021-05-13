<?php

namespace App\Http\Controllers;

use App\Models\Sevisi;
use App\Models\Brodica;
use Illuminate\Http\Request;

class SevisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servisi=Sevisi::latest()->get(); 
        return view('pregledservisa', compact('servisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('noviservis');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $brodica=Brodica::find($id);
        Sevisi::create([
            'datum'=>$request->datum,
            'opis'=>$request->opis,
            'idBrodice'=>$brodica->id,
        ]);

        $message="Successfuly Added";
        $servisi=Sevisi::all();

        return view('pregledservisa', compact('message', 'servisi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sevisi  $sevisi
     * @return \Illuminate\Http\Response
     */
    public function show(Sevisi $sevisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sevisi  $sevisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Sevisi $sevisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sevisi  $sevisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sevisi $sevisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sevisi  $sevisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sevisi $sevisi)
    {
        //
    }
}
