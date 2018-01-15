@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3><span class="glyphicon glyphicon-pencil"></span> Cadastro de Produto</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('produtos.index') }}"><span class="glyphicon glyphicon-menu-left"></span> Voltar</a>
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

    {!! Form::open(array('route' => 'produtos.store','method'=>'POST')) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {!! Form::text('nome', null, array('placeholder' => 'Nome..','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descricao:</strong>
                {!! Form::textarea('descricao', null, array('placeholder' => 'Descrição..','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantidade:</strong>
                {!! Form::number('quantidade', null, array('placeholder' => 'Quantidade..','class' => 'form-control','style'=>'width: 300px')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Preço:</strong>
                {!! Form::text('preco', null, array('placeholder' => 'Preço..','class' => 'form-control','style'=>'width: 300px')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> CADASTRAR</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection