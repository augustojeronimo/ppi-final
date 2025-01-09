<?php

namespace App\Http\Controllers;

use App\Models\Experimento;
use Illuminate\Http\Request;

class ExperimentoController extends Controller
{
    public function index()
    {
        $experimentos = Experimento::all();

        return view('experimentos/index', compact('experimentos'));
    }

    public function create()
    {
        return view('experimentos/create');
    }

    public function store(Request $request)
    {
        $dados = $request->all([
            'nome',
            'descricao',
            'data',
        ]);

        Experimento::create($dados);

        return redirect()->route('experimento.index');
    }

    public function show(Experimento $experimento)
    {
        return view('experimentos/show', compact('experimento'));
    }

    public function edit(Experimento $experimento)
    {
        return view('experimentos/edit', compact('experimento'));
    }

    public function update(Request $request, Experimento $experimento)
    {
        $dados = $request->all([
            'nome',
            'descricao',
            'data',
        ]);

        $experimento->update($dados);

        return redirect()->route('experimento.index');
    }

    public function destroy(Experimento $experimento)
    {
        $experimento->delete();

        return redirect()->route('experimento.index');
    }
}
