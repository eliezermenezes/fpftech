@extends('layout')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Produtos CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('produtos.create') }}"> Adicionar novo produto</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p><strong>{{ $message }}</strong></p>
        </div>
    @endif
    <div class='table-responsive'>
        <table class="table table-bordered table-striped">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th width="280px">Ação</th>
            </tr>
            @foreach ($produtos as $key => $produto)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->quantidade }}</td>
                <td>{{ $produto->preco }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('produtos.show',$produto->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('produtos.edit',$produto->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['produtos.destroy', $produto->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            @if(count($produtos) == 0)
            <tr>
                <td colspan='4' class='text-center'>Nada</td>
            </tr>
            @endif
        </table>
    </div>
    {!! $produtos->render() !!}

@endsection