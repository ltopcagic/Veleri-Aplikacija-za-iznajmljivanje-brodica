<?php

namespace App\Http\Controllers;

use App\Models\Brodica;
use Illuminate\Http\Request;
use App\Models\Iznajmljena_brodica;

class IznajmljenaBrodicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $brodica=Brodica::find($id);
        return view('iznajmljivanjebrodice', compact('brodica'));
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
       
        /** @if (Iznajmljenabrodica::where('datum_iznajmljivanja', '=', Input::get('datum_iznajmljivanja'))->exists() || 'idBrodice', '=', Input::get('idBrodice'))->exists()) {*/
            
        Iznajmljena_brodica::create([
            'idBrodica'=>$brodica->id,
            'ime_gosta'=>$request->ime_gosta,
            'prezime_gosta'=>$request->prezime_gosta,
            'email_gosta'=>$request->email_gosta,
            'telefon_gosta'=>$request->telefon_gosta,
            'datum_iznajmljivanja'=>$request->datum_iznajmljivanja,
        ]);

        return redirect('/pregledbrodica');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iznajmljena_brodica  $iznajmljena_brodica
     * @return \Illuminate\Http\Response
     */
    public function show(Iznajmljena_brodica $iznajmljena_brodica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iznajmljena_brodica  $iznajmljena_brodica
     * @return \Illuminate\Http\Response
     */
    public function edit(Iznajmljena_brodica $iznajmljena_brodica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iznajmljena_brodica  $iznajmljena_brodica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iznajmljena_brodica $iznajmljena_brodica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iznajmljena_brodica  $iznajmljena_brodica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iznajmljena_brodica $iznajmljena_brodica)
    {
        //
    }
}
