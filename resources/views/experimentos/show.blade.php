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

<a href="{{ route('experimento.index') }}" style="margin-left: 1em;">
    <button>Voltar</button>
</a>

<div style="padding: 1em;">
    <h3 style="margin: 0">{{ $experimento->nome }}</h3>
    <p>Descrição: {{ $experimento->descricao }}</p>
    <p>Data: {{ \Carbon\Carbon::parse($experimento->data)->format('d/m/Y') }}</p>
</div>


