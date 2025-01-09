<a href="{{ route('inicio') }}"><button>
    Início
</button></a>
<a href="{{ route('movel.index') }}"><button>
    Móveis
</button></a>
<a href="{{ route('equipamento.index') }}"><button>
    Equipamentos
</button></a>
<a href="{{ route('material.index') }}"><button>
    <strong>Materiais</strong>
</button></a>
<a href="{{ route('reagente.index') }}"><button>
    Reagentes
</button></a>
<a href="{{ route('experimento.index') }}"><button>
    Experimentos
</button></a>
<a href="{{ route('residuo.index') }}"><button>
    Resíduos
</button></a>
<hr>

<a href="{{ route('material.index') }}" style="margin-left: 1em;">
    <button>Voltar</button>
</a>

<form action="{{ route('material.store') }}" method="post" enctype="multipart/form-data" style="padding: 1em;">
    @csrf
    nome: <input required name="nome" type="text">
    <br> <br>
    descrição: <input required name="descricao" type="text">
    <br> <br>
    imagem: <input required name="imagem" type="file" accept="image/jpeg">
    <br> <br>
    <select name="movel_id">
        <option selected>--- Selecionar móvel ---</option>
        @if (! $moveis->isEmpty())
            @foreach ($moveis as $movel)
                <option value="{{ $movel->id }}">{{ $movel->nome }}</option>
            @endforeach
        @endif
    </select>
    <br> <br>
    <input type="submit" value="Cadastrar">
</form>



