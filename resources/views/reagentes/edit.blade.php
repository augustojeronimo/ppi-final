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
    Materiais
</button></a>
<a href="{{ route('reagente.index') }}"><button>
    <strong>Reagentes</strong>
</button></a>
<a href="{{ route('experimento.index') }}"><button>
    Experimentos
</button></a>
<a href="{{ route('residuo.index') }}"><button>
    Resíduos
</button></a>
<hr>

<a href="{{ route('reagente.index') }}" style="margin-left: 1em;">
    <button>Voltar</button>
</a>

<form action="{{ route('reagente.update', $reagente) }}" method="post" enctype="multipart/form-data" style="padding: 1em;">
    @csrf
    @method('PUT')
    nome: <input required name="nome" type="text" value="{{ $reagente->nome }}">
    <br> <br>
    validade: <input required name="validade" type="date" value="{{ $reagente->validade }}">
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
    <input type="submit" value="Atualizar">
</form>


