<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Movel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    public function index()
    {
        $materiais = Material::all();

        return view('materiais/index', compact('materiais'));
    }

    public function create()
    {
        $moveis = Movel::all();
        return view('materiais/create', compact('moveis'));
    }

    public function store(Request $request)
    {
        $dados = $request->all([
            'nome',
            'descricao',
            'movel_id',
        ]);

        $nomeImagem = date('Y-m-d_H-i-s-u').".".$request->imagem->extension();
        $caminho = $request->file('imagem')->storeAs('public/imagens/materiais', $nomeImagem);

        $dados['imagem'] = str_replace('public', 'storage', $caminho);

        Material::create($dados);

        return redirect()->route('material.index');
    }

    public function show(Material $material)
    {
        return view('materiais/show', compact('material'));
    }

    public function edit(Material $material)
    {
        $moveis = Movel::all();
        return view('materiais/edit', compact(['material', 'moveis']));
    }

    public function update(Request $request, Material $material)
    {
        $dados = $request->all([
            'nome',
            'descricao',
            'movel_id',
        ]);
        $dados['imagem'] = $material->imagem;

        if ($request->hasFile("imagem")) {
            $caminho = dirname(str_replace('storage', 'public', $material->imagem));
            $nomeImagem = basename($material->imagem);
            $request->file('imagem')->storeAs($caminho, $nomeImagem);
        }

        $material->update($dados);

        return redirect()->route('material.index');
    }

    public function destroy(Material $material)
    {
        $material->delete();

        $caminho =str_replace('storage', 'public', $material->imagem);
        Storage::delete($caminho);

        return redirect()->route('material.index');
    }
}
