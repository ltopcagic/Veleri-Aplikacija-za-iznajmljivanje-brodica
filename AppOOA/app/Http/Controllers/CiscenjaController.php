$table->foreignId('idGosta');
            $table->foreignId('idPutovanja');
            $table->timestamps();

            $table->foreign('idGosta')->references('id')->on('gosts')->onDelete('restrict');
            $table->foreign('idPutovanja')->references('id')->on('putovanjes')->onDelete('restrict');<?php

namespace App\Http\Controllers;

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
        //
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
    public function destroy(Ciscenja $ciscenja)
    {
        //
    }
}
