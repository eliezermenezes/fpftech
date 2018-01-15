@extends('layout')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3><span class="glyphicon glyphicon-pencil"></span> Editar Produto</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('produtos.index') }}"> <span class="glyphicon glyphicon-menu-left"></span> Voltar</a>
            </div>
        </div>
    </div>
    <hr>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Atenção!</strong> Verifique os campos obrigatórios e tente novamente.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($produto, ['method' => 'PATCH','route' => ['produtos.update', $produto->id]]) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {!! Form::text('nome', null, array('placeholder' => 'Nome','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição:</strong>
                {!! Form::textarea('descricao', null, array('placeholder' => 'Descricao','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantidade:</strong>
                {!! Form::number('quantidade', null, array('placeholder' => 'Quantidade','class' => 'form-control','style'=>'width:300px')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Preço:</strong>
                {!! Form::text('preco', null, array('placeholder' => 'Preco','class' => 'form-control','style'=>'width:300px')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> SALVAR</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection