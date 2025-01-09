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
    <strong>Experimentos</strong>
</button></a>
<a href="{{ route('residuo.index') }}"><button>
    Resíduos
</button></a>
<hr>

<a href="{{ route('experimento.create') }}" style="margin-left: 1em;">
    <button>Criar+</button>
</a>

@if (! $experimentos->isEmpty())

    @foreach ($experimentos as $experimento)

    <div style="border: 1px solid black; padding: 1em; margin: 1em;">
        <h3 style="margin: 0">{{ $experimento->nome }}</h3>
        <p>{{ $experimento->descricao }}</p>
        <p>data: {{ \Carbon\Carbon::parse($experimento->data)->format('d/m/Y') }}</p>
        <a href="{{ route('experimento.show', $experimento) }}"><button>Ver</button></a>
        <a href="{{ route('experimento.edit', $experimento) }}"><button>Editar</button></a>
        <form action="{{ route('experimento.destroy', $experimento) }}" method="post" style="display: inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar">
        </form>
    </div>

    @endforeach

@else

<h2>Nenhum experimento cadastrado...</h2>

@endif
