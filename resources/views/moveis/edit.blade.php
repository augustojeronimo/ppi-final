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

<a href="{{ route('movel.index') }}" style="margin-left: 1em;">
    <button>Voltar</button>
</a>

<form action="{{ route('movel.update', $movel) }}" method="post" style="padding: 1em;">
    @csrf
    @method('PUT')
    nome: <input required name="nome" type="text" value="{{ $movel->nome }}">
    <br> <br>
    localização: <input required name="localizacao" type="text" value="{{ $movel->localizacao }}">
    <br> <br>
    <input type="submit" value="Atualizar">
</form>


