<a href="{{ route('inicio') }}"><button>
    Início
</button></a>
<a href="{{ route('movel.index') }}"><button>
    <strong>Móveis</strong>
</button></a>
<a href="{{ route('movel.index') }}"><button>
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

<a href="{{ route('movel.index') }}" style="margin-left: 1em;">
    <button>Voltar</button>
</a>

<div style="padding: 1em;">
    <h3 style="margin: 0">{{ $movel->nome }}</h3>
    <p>{{ $movel->localizacao }}</p>
</div>


