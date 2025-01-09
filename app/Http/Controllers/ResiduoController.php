<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResiduoRequest;
use App\Http\Requests\UpdateResiduoRequest;
use App\Models\Residuo;

class ResiduoController extends Controller
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
     * @param  \App\Http\Requests\StoreResiduoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResiduoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Residuo  $residuo
     * @return \Illuminate\Http\Response
     */
    public function show(Residuo $residuo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Residuo  $residuo
     * @return \Illuminate\Http\Response
     */
    public function edit(Residuo $residuo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResiduoRequest  $request
     * @param  \App\Models\Residuo  $residuo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResiduoRequest $request, Residuo $residuo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Residuo  $residuo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Residuo $residuo)
    {
        //
    }
}
