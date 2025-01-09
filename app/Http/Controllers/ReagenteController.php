<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReagenteRequest;
use App\Http\Requests\UpdateReagenteRequest;
use App\Models\Reagente;

class ReagenteController extends Controller
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
     * @param  \App\Http\Requests\StoreReagenteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReagenteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reagente  $reagente
     * @return \Illuminate\Http\Response
     */
    public function show(Reagente $reagente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reagente  $reagente
     * @return \Illuminate\Http\Response
     */
    public function edit(Reagente $reagente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReagenteRequest  $request
     * @param  \App\Models\Reagente  $reagente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReagenteRequest $request, Reagente $reagente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reagente  $reagente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reagente $reagente)
    {
        //
    }
}
