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

<a href="{{ route('material.create') }}" style="margin-left: 1em;">
    <button>Criar+</button>
</a>

@if (! $materiais->isEmpty())

    @foreach ($materiais as $material)

    <div style="border: 1px solid black; padding: 1em; margin: 1em;">
        <h3 style="margin: 0">{{ $material->nome }}</h3>
        <p>Localizado em: <a href="{{ route('movel.show', $material->movel()) }}">{{ $material->movel()->nome }}</a></p>
        <p>{{ $material->descricao }}</p>
        @if (! empty($material->imagem))
            <img src="{{ asset($material->imagem) }}" alt="Imagem" style="height: 100px">
            <br> <br>
        @endif
        <a href="{{ route('material.show', $material) }}"><button>Ver</button></a>
        <a href="{{ route('material.edit', $material) }}"><button>Editar</button></a>
        <form action="{{ route('material.destroy', $material) }}" method="post" style="display: inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar">
        </form>
    </div>

    @endforeach

@else

<h2>Nenhum material cadastrado...</h2>

@endif
