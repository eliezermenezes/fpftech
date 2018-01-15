@extends('layout')
 
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h3>Produtos</h3>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p><strong>{{ $message }}</strong></p>
        </div>
    @endif

    <div class="panel panel-primary">
        <div class="panel-heading"> Lista de produtos cadastrados</div>
        <div class="panel-body">
            <div class="options text-right">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('produtos.create') }}"> Adicionar produto</a>
                </div>
            </div>
        </div>
        <div class='table-responsive'>
            <table class="table table-bordered table-striped">
                <tr>
                    <th class="text-center">#</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th width="280px" class="text-center">Opções</th>
                </tr>
                @foreach ($produtos as $key => $produto)
                <tr>
                    <td class="text-center">{{ ++$key }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td class="text-center">
                       <a class="btn btn-info btn-sm" href="{{ route('produtos.show',$produto->id) }}">Visualizar</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('produtos.edit',$produto->id) }}">Editar</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['produtos.destroy', $produto->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Excluir', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                </tr>
                @endforeach
                @if(count($produtos) == 0)
                <tr>
                    <td colspan='6' class='text-center'>Nenhum produto encontrado.</td>
                </tr>
                @endif
            </table>
        </div>
        {!! $produtos->render() !!}
    </div>

@endsection