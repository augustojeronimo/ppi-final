<?php

namespace App\Http\Controllers;

use App\Models\Residuo;
use Illuminate\Http\Request;

class ResiduoController extends Controller
{
    public function index()
    {
        $residuos = Residuo::all();

        return view('residuos/index', compact('residuos'));
    }

    public function create()
    {
        return view('residuos/create');
    }

    public function store(Request $request)
    {
        $dados = $request->all([
            'nome',
            'descarte',
        ]);

        Residuo::create($dados);

        return redirect()->route('residuo.index');
    }

    public function show(Residuo $residuo)
    {
        return view('residuos/show', compact('residuo'));
    }

    public function edit(Residuo $residuo)
    {
        return view('residuos/edit', compact('residuo'));
    }

    public function update(Request $request, Residuo $residuo)
    {
        $dados = $request->all([
            'nome',
            'descarte',
        ]);

        $residuo->update($dados);

        return redirect()->route('residuo.index');
    }

    public function destroy(Residuo $residuo)
    {
        $residuo->delete();

        return redirect()->route('residuo.index');
    }
}
