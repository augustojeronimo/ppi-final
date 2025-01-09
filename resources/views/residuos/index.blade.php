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
    Reagentes
</button></a>
<a href="{{ route('experimento.index') }}"><button>
    Experimentos
</button></a>
<a href="{{ route('residuo.index') }}"><button>
    <strong>Resíduos</strong>
</button></a>
<hr>

<a href="{{ route('residuo.create') }}" style="margin-left: 1em;">
    <button>Criar+</button>
</a>

@if (! $residuos->isEmpty())

    @foreach ($residuos as $residuo)

    <div style="border: 1px solid black; padding: 1em; margin: 1em;">
        <h3 style="margin: 0">{{ $residuo->nome }}</h3>
        <p>descarte: {{ \Carbon\Carbon::parse($residuo->descarte)->format('d/m/Y') }}</p>
        <a href="{{ route('residuo.show', $residuo) }}"><button>Ver</button></a>
        <a href="{{ route('residuo.edit', $residuo) }}"><button>Editar</button></a>
        <form action="{{ route('residuo.destroy', $residuo) }}" method="post" style="display: inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar">
        </form>
    </div>

    @endforeach

@else

<h2>Nenhum resíduo cadastrado...</h2>

@endif
