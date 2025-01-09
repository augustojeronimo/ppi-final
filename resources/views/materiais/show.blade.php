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

<div style="padding: 1em;">
    <h3 style="margin: 0">{{ $material->nome }}</h3>
    <p>Localizado em: <a href="{{ route('movel.show', $material->movel()) }}">{{ $material->movel()->nome }}</a></p>
    <p>Descrição: {{ $material->descricao }}</p>
    @if (! empty($material->imagem))
        <img src="{{ asset($material->imagem) }}" alt="Imagem" style="height: 300px">
        <br> <br>
    @endif
</div>


