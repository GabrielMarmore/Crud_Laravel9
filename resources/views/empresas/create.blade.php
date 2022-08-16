@extends('empresas.layout')

@section('content')
<div class="row mb-2">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Criar nova empresa</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('empresas.index') }}"> Voltar</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Ops!</strong> Erros nos dados enviados.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('empresas.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome Fantasia:</strong>
                <input type="text" name="nome_fantasia" class="form-control" placeholder="Nome fantasia">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Razão social:</strong>
                <input type="text" name="razao_social" class="form-control" placeholder="Razão social">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cnpj:</strong>
                <input type="text" name="cnpj" class="form-control" placeholder="Cnpj">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
</form>

@endsection