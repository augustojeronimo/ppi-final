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

<form action="{{ route('experimento.store') }}" method="post" enctype="multipart/form-data" style="padding: 1em;">
    @csrf
    nome: <input required name="nome" type="text">
    <br> <br>
    descrição: <input required name="descricao" type="text">
    <br> <br>
    data: <input required name="data" type="date">
    <br> <br>
    <input type="submit" value="Cadastrar">
</form>



