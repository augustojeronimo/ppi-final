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

<a href="{{ route('reagente.create') }}" style="margin-left: 1em;">
    <button>Criar+</button>
</a>

@if (! $reagentes->isEmpty())

    @foreach ($reagentes as $reagente)

    <div style="border: 1px solid black; padding: 1em; margin: 1em;">
        <h3 style="margin: 0">{{ $reagente->nome }}</h3>
        <p>Localizado em: <a href="{{ route('movel.show', $reagente->movel()) }}">{{ $reagente->movel()->nome }}</a></p>
        <p>Validade: {{ \Carbon\Carbon::parse($reagente->validade)->format('d/m/Y') }}</p>
        @if (! empty($reagente->imagem))
            <img src="{{ asset($reagente->imagem) }}" alt="Imagem" style="height: 100px">
            <br> <br>
        @endif
        <a href="{{ route('reagente.show', $reagente) }}"><button>Ver</button></a>
        <a href="{{ route('reagente.edit', $reagente) }}"><button>Editar</button></a>
        <form action="{{ route('reagente.destroy', $reagente) }}" method="post" style="display: inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar">
        </form>
    </div>

    @endforeach

@else

<h2>Nenhum reagente cadastrado...</h2>

@endif
