<?php

namespace App\Http\Controllers;

use App\Models\Brodica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrodicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brodice=Brodica::latest()->get();  
        return view('pregledbrodica', compact('brodice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novabrodica');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Brodica::create([
            'naziv'=>$request->naziv,
            'vrsta'=>$request->vrsta,
            'broj_ljudi'=>$request->broj_ljudi,
            'cijena'=>$request->cijena,
        ]);

        $message="Successfuly Added";
        $brodice=Brodica::all();

        return view('pregledbrodica', compact('message', 'brodice'));
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
    public function edit($id)
    {
        $brodica=Brodica::find($id);
        return view('izmjenabrodice', compact('brodica'));
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
        $brodica->update([
            'naziv'=>$request->naziv,
            'vrsta'=>$request->vrsta,
            'broj_ljudi'=>$request->broj_ljudi,
            'cijena'=>$request->cijena,
        ]);

        $message="Successfuly Edited";
        $brodice=Brodica::all();

        return view('pregledbrodica', compact('message', 'brodice'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brodica  $brodica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brodica=Brodica::find($id)->delete();
        $message="Brodica je uspješno obrisana!";
        redirect('pregledbrodica',compact('message','brodice'));
    }
}
