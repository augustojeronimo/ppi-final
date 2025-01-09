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

<div style="padding: 1em;">
    <h3 style="margin: 0">{{ $reagente->nome }}</h3>
    <p>Localizado em: <a href="{{ route('movel.show', $reagente->movel()) }}">{{ $reagente->movel()->nome }}</a></p>
    <p>Validade: {{ \Carbon\Carbon::parse($reagente->validade)->format('d/m/Y') }}</p>
</div>


