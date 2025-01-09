<a href="{{ route('inicio') }}"><button>
    Início
</button></a>
<a href="{{ route('movel.index') }}"><button>
    Móveis
</button></a>
<a href="{{ route('equipamento.index') }}"><button>
    <strong>Equipamentos</strong>
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

<a href="{{ route('equipamento.create') }}" style="margin-left: 1em;">
    <button>Criar+</button>
</a>

@if (! $equipamentos->isEmpty())

    @foreach ($equipamentos as $equipamento)

    <div style="border: 1px solid black; padding: 1em; margin: 1em;">
        <h3 style="margin: 0">{{ $equipamento->nome }}</h3>
        <p>Localizado em: <a href="{{ route('movel.show', $equipamento->movel()) }}">{{ $equipamento->movel()->nome }}</a></p>
        @if (! empty($equipamento->imagem))
            <img src="{{ asset($equipamento->imagem) }}" alt="Imagem" style="height: 100px">
            <br> <br>
        @endif
        <a href="{{ route('equipamento.show', $equipamento) }}"><button>Ver</button></a>
        <a href="{{ route('equipamento.edit', $equipamento) }}"><button>Editar</button></a>
        <form action="{{ route('equipamento.destroy', $equipamento) }}" method="post" style="display: inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar">
        </form>
    </div>

    @endforeach

@else

<h2>Nenhum móvel cadastrado...</h2>

@endif
