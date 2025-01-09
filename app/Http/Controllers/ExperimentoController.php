<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExperimentoRequest;
use App\Http\Requests\UpdateExperimentoRequest;
use App\Models\Experimento;

class ExperimentoController extends Controller
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
     * @param  \App\Http\Requests\StoreExperimentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExperimentoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experimento  $experimento
     * @return \Illuminate\Http\Response
     */
    public function show(Experimento $experimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experimento  $experimento
     * @return \Illuminate\Http\Response
     */
    public function edit(Experimento $experimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExperimentoRequest  $request
     * @param  \App\Models\Experimento  $experimento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExperimentoRequest $request, Experimento $experimento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experimento  $experimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experimento $experimento)
    {
        //
    }
}
