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

<div style="display: flex; gap: 1em;">
    <div>
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th>Materiais</th>
            </tr>
            <tr>
                <td>
                    <form action="{{ route('experimento.material.create', $experimento) }}" method="POST" style="margin: 0.5em">
                        @csrf
                        <select name="material">
                            <option>--- Adicionar ---</option>
                            @foreach ($materiais as $item)
                                <option value="{{ $item->id }}">{{ $item->nome }}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="Adicionar">
                    </form>
                </td>
            </tr>
            @foreach ($experimento->materiais()->get() as $item)
                <tr>
                    <td>
                        <form action="{{ route('experimento.material.destroy', [$experimento, $item]) }}" method="POST" style="margin: 0.5em; display: flex; justify-content: space-around">
                            @csrf
                            @method('DELETE')
                            <div>{{ $item->nome }}</div>
                            <input type="submit" value="remover">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div>
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th>Equipamentos</th>
            </tr>
            <tr>
                <td>
                    <form action="{{ route('experimento.equipamento.create', $experimento) }}" method="POST" style="margin: 0.5em">
                        @csrf
                        <select name="equipamento">
                            <option>--- Adicionar ---</option>
                            @foreach ($equipamentos as $item)
                                <option value="{{ $item->id }}">{{ $item->nome }}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="Adicionar">
                    </form>
                </td>
            </tr>
            @foreach ($experimento->equipamentos()->get() as $item)
                <tr>
                    <td>
                        <form action="{{ route('experimento.equipamento.destroy', [$experimento, $item]) }}" method="POST" style="margin: 0.5em; display: flex; justify-content: space-around">
                            @csrf
                            @method('DELETE')
                            <div>{{ $item->nome }}</div>
                            <input type="submit" value="remover">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div>
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th>Reagentes</th>
            </tr>
            <tr>
                <td>
                    <form action="{{ route('experimento.reagente.create', $experimento) }}" method="POST" style="margin: 0.5em">
                        @csrf
                        <select name="reagente">
                            <option>--- Adicionar ---</option>
                            @foreach ($reagentes as $item)
                                <option value="{{ $item->id }}">{{ $item->nome }}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="Adicionar">
                    </form>
                </td>
            </tr>
            @foreach ($experimento->reagentes()->get() as $item)
                <tr>
                    <td>
                        <form action="{{ route('experimento.reagente.destroy', [$experimento, $item]) }}" method="POST" style="margin: 0.5em; display: flex; justify-content: space-around">
                            @csrf
                            @method('DELETE')
                            <div>{{ $item->nome }}</div>
                            <input type="submit" value="remover">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div>
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th>Residuos</th>
            </tr>
            <tr>
                <td>
                    <form action="{{ route('experimento.residuo.create', $experimento) }}" method="POST" style="margin: 0.5em">
                        @csrf
                        <select name="residuo">
                            <option>--- Adicionar ---</option>
                            @foreach ($residuos as $item)
                                <option value="{{ $item->id }}">{{ $item->nome }}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="Adicionar">
                    </form>
                </td>
            </tr>
            @foreach ($experimento->residuos()->get() as $item)
                <tr>
                    <td>
                        <form action="{{ route('experimento.residuo.destroy', [$experimento, $item]) }}" method="POST" style="margin: 0.5em; display: flex; justify-content: space-around">
                            @csrf
                            @method('DELETE')
                            <div>{{ $item->nome }}</div>
                            <input type="submit" value="remover">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
