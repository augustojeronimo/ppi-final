<?php

namespace App\Http\Controllers;

use App\Models\Movel;
use Illuminate\Http\Request;

class MovelController extends Controller
{
    public function index()
    {
        $moveis = Movel::all();

        return view('moveis/index', compact('moveis'));
    }

    public function create()
    {
        return view('moveis/create');
    }

    public function store(Request $request)
    {
        Movel::create($request->all());

        return redirect()->route('movel.index');
    }

    public function show(Movel $movel)
    {
        // return view('moveis/show', compact('movel'));
    }

    public function edit(Movel $movel)
    {
        return view('moveis/edit', compact('movel'));
    }

    public function update(Request $request, Movel $movel)
    {
        $movel->update($request->all());

        return redirect()->route('movel.index');
    }

    public function destroy(Movel $movel)
    {
        $movel->delete();

        return redirect()->route('movel.index');
    }
}
