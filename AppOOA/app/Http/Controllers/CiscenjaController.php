<?php

namespace App\Http\Controllers;

use App\Models\Brodica;
use App\Models\Ciscenja;
use Illuminate\Http\Request;

class CiscenjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciscenja=Ciscenja::latest()->get();
        return view('pregledciscenja', compact('ciscenja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brodice=Brodica::all();
        return view('novociscenje', compact('brodice'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ciscenja::create([
            'datum'=>$request->datum,
            'idBrodice'=>$request->idBrodice,
        ]);

        $message="Successfuly Added";
        $ciscenja=Ciscenja::all();

        return view('pregledciscenja', compact('message', 'ciscenja'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ciscenja  $ciscenja
     * @return \Illuminate\Http\Response
     */
    public function show(Ciscenja $ciscenja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ciscenja  $ciscenja
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciscenja $ciscenja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ciscenja  $ciscenja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciscenja $ciscenja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ciscenja  $ciscenja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciscenja=Ciscenja::find($id)->delete();
        $message="Čišćenje je uspješno uklonjeno!";
        return redirect()->back();
    }
}
