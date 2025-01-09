<?php

namespace App\Http\Controllers;

use App\Models\Movel;
use App\Models\Reagente;
use Illuminate\Http\Request;

class ReagenteController extends Controller
{
    public function index()
    {
        $reagentes = Reagente::all();

        return view('reagentes/index', compact('reagentes'));
    }

    public function create()
    {
        $moveis = Movel::all();
        return view('reagentes/create', compact('moveis'));
    }

    public function store(Request $request)
    {
        $dados = $request->all([
            'nome',
            'validade',
            'movel_id',
        ]);
        
        Reagente::create($dados);

        return redirect()->route('reagente.index');
    }

    public function show(Reagente $reagente)
    {
        return view('reagentes/show', compact('reagente'));
    }

    public function edit(Reagente $reagente)
    {
        $moveis = Movel::all();
        return view('reagentes/edit', compact(['reagente', 'moveis']));
    }

    public function update(Request $request, Reagente $reagente)
    {
        $dados = $request->all([
            'nome',
            'validade',
            'movel_id',
        ]);

        $reagente->update($dados);

        return redirect()->route('reagente.index');
    }

    public function destroy(Reagente $reagente)
    {
        $reagente->delete();

        return redirect()->route('reagente.index');
    }
}
