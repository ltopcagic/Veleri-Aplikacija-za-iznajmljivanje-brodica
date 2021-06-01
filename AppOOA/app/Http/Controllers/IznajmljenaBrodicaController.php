<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Brodica;
use Illuminate\Http\Request;
use App\Models\Iznajmljena_brodica;
use Illuminate\Support\Facades\Auth;

class IznajmljenaBrodicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user()->id;
        $dateToday = new Carbon(now());
        $iznajmljenebrodice=Iznajmljena_brodica::latest()->get();
        return view('preglediznajmljenihbrodica', compact('iznajmljenebrodice'));
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
        //$iznajmljenebrodice=Iznajmljena_brodica::get()->all();
        $Boolean=Iznajmljena_Brodica::where('datum_iznajmljivanja', $request->datum_iznajmljivanja)->where('idBrodica', $id)->exists();
        if($Boolean==true){
            $message="Brodica je vec iznajmljena na taj datum!";
            return view('iznajmljivanjebrodice', compact('message', 'brodica'));
        }else{
            $request->validate([
                'ime_gosta' => 'min:2 | required ',
                'prezime_gosta'=> 'min:2 | required',
                'email_gosta' => 'min:5 | required',
                'telefon_gosta' => ' required | digits_between:7,14',
                'datum_iznajmljivanja' => 'required | after:yesterday ',
            ]);
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
    public function destroy($id)
    {
        $iznajmljenabrodica=Iznajmljena_brodica::find($id)->delete();
        $message="Iznajmljena brodica je uspješno uklonjena!";
        return redirect()->back();
    }
}
