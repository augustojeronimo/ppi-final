<a href="{{ route('inicio') }}"><button>
    Início
</button></a>
<a href="{{ route('movel.index') }}"><button>
    <strong>Móveis</strong>
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
    Resíduos
</button></a>
<hr>

<a href="{{ route('movel.create') }}" style="margin-left: 1em;">
    <button>Criar+</button>
</a>

@if (! $moveis->isEmpty())

    @foreach ($moveis as $movel)

    <div style="border: 1px solid black; padding: 1em; margin: 1em;">
        <h3 style="margin: 0">{{ $movel->nome }}</h3>
        <p>{{ $movel->localizacao }}</p>
        <a href="{{ route('movel.show', $movel) }}"><button>Ver</button></a>
        <a href="{{ route('movel.edit', $movel) }}"><button>Editar</button></a>
        <form action="{{ route('movel.destroy', $movel) }}" method="post" style="display: inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar">
        </form>
    </div>

    @endforeach

@else

<h2>Nenhum móvel cadastrado...</h2>

@endif
