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
    Experimentos
</button></a>
<a href="{{ route('residuo.index') }}"><button>
    <strong>Resíduos</strong>
</button></a>
<hr>

<a href="{{ route('residuo.index') }}" style="margin-left: 1em;">
    <button>Voltar</button>
</a>

<form action="{{ route('residuo.update', $residuo) }}" method="post" enctype="multipart/form-data" style="padding: 1em;">
    @csrf
    @method('PUT')
    nome: <input required name="nome" type="text" value="{{ $residuo->nome }}">
    <br> <br>
    descarte: <input name="descarte" type="date" value="{{ $residuo->descarte }}">
    <br> <br>
    <input type="submit" value="Atualizar">
</form>


