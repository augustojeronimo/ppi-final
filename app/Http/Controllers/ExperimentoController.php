<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Experimento;
use App\Models\Material;
use App\Models\Reagente;
use App\Models\Residuo;
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
        $reagentes = Reagente::whereDoesntHave('experimentos', function ($query) use ($experimento) {
            $query->where('id', $experimento->id);
        })->get();

        $materiais = Material::whereDoesntHave('experimentos', function ($query) use ($experimento) {
            $query->where('id', $experimento->id);
        })->get();

        $equipamentos = Equipamento::whereDoesntHave('experimentos', function ($query) use ($experimento) {
            $query->where('id', $experimento->id);
        })->get();

        $residuos = Residuo::whereDoesntHave('experimentos', function ($query) use ($experimento) {
            $query->where('id', $experimento->id);
        })->get();

        return view('experimentos/show', compact(['experimento', 'reagentes', 'materiais', 'equipamentos', 'residuos']));
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

    public function create_experimento_material(Request $request, Experimento $experimento) {
        $experimento->materiais()->attach($request->material);

        return redirect()->route('experimento.show', $experimento);
    }

    public function destroy_experimento_material(Experimento $experimento, Material $material) {
        $experimento->materiais()->detach($material->id);

        return redirect()->route('experimento.show', $experimento);
    }

    public function create_experimento_equipamento(Request $request, Experimento $experimento) {
        $experimento->equipamentos()->attach($request->equipamento);

        return redirect()->route('experimento.show', $experimento);
    }

    public function destroy_experimento_equipamento(Experimento $experimento, Equipamento $equipamento) {
        $experimento->equipamentos()->detach($equipamento->id);

        return redirect()->route('experimento.show', $experimento);
    }

    public function create_experimento_reagente(Request $request, Experimento $experimento) {
        $experimento->reagentes()->attach($request->reagente);

        return redirect()->route('experimento.show', $experimento);
    }

    public function destroy_experimento_reagente(Experimento $experimento, Reagente $reagente) {
        $experimento->reagentes()->detach($reagente->id);

        return redirect()->route('experimento.show', $experimento);
    }

    public function create_experimento_residuo(Request $request, Experimento $experimento) {
        $experimento->residuos()->attach($request->residuo);

        return redirect()->route('experimento.show', $experimento);
    }

    public function destroy_experimento_residuo(Experimento $experimento, Residuo $residuo) {
        $experimento->residuos()->detach($residuo->id);

        return redirect()->route('experimento.show', $experimento);
    }
}
