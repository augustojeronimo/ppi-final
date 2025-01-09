<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Movel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EquipamentoController extends Controller
{
    public function index()
    {
        $equipamentos = Equipamento::all();

        return view('equipamentos/index', compact('equipamentos'));
    }

    public function create()
    {
        $moveis = Movel::all();
        return view('equipamentos/create', compact('moveis'));
    }

    public function store(Request $request)
    {
        $dados = $request->all([
            'nome',
            'movel_id',
        ]);

        $nomeImagem = date('Y-m-d_H-i-s-u').".".$request->imagem->extension();
        $caminho = $request->file('imagem')->storeAs('public/imagens/equipamentos', $nomeImagem);

        $dados['imagem'] = str_replace('public', 'storage', $caminho);

        Equipamento::create($dados);

        return redirect()->route('equipamento.index');
    }

    public function show(Equipamento $equipamento)
    {
        return view('equipamentos/show', compact('equipamento'));
    }

    public function edit(Equipamento $equipamento)
    {
        $moveis = Movel::all();
        return view('equipamentos/edit', compact(['equipamento', 'moveis']));
    }

    public function update(Request $request, Equipamento $equipamento)
    {
        $dados = $request->all([
            'nome',
            'movel_id',
        ]);
        $dados['imagem'] = $equipamento->imagem;

        if ($request->hasFile("imagem")) {
            $caminho = dirname(str_replace('storage', 'public', $equipamento->imagem));
            $nomeImagem = basename($equipamento->imagem);
            $request->file('imagem')->storeAs($caminho, $nomeImagem);
        }

        $equipamento->update($dados);

        return redirect()->route('equipamento.index');
    }

    public function destroy(Equipamento $equipamento)
    {
        $equipamento->delete();

        $caminho =str_replace('storage', 'public', $equipamento->imagem);
        Storage::delete($caminho);

        return redirect()->route('equipamento.index');
    }
}
