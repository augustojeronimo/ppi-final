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

<form action="{{ route('experimento.update', $experimento) }}" method="post" enctype="multipart/form-data" style="padding: 1em;">
    @csrf
    @method('PUT')
    nome: <input required name="nome" type="text" value="{{ $experimento->nome }}">
    <br> <br>
    descrição: <input required name="descricao" type="text" value="{{ $experimento->descricao }}">
    <br> <br>
    data: <input name="data" type="date" value="{{ $experimento->data }}">
    <br> <br>
    <input type="submit" value="Atualizar">
</form>


