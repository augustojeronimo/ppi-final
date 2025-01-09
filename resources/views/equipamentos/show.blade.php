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

<a href="{{ route('equipamento.index') }}" style="margin-left: 1em;">
    <button>Voltar</button>
</a>

<div style="padding: 1em;">
    <h3 style="margin: 0">{{ $equipamento->nome }}</h3>
    <p>Localizado em: <a href="{{ route('movel.show', $equipamento->movel()) }}">{{ $equipamento->movel()->nome }}</a></p>
    @if (! empty($equipamento->imagem))
        <img src="{{ asset($equipamento->imagem) }}" alt="Imagem" style="height: 300px">
        <br> <br>
    @endif
</div>


