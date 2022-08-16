@extends('empresas.layout')
 
@section('content')
    <div class="row mb-2">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Teste técnico Ouro Moderno - Laravel 9 CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('empresas.create') }}"> Criar nova empresa</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success marginVertical">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>N°</th>
            <th>Nome fantasia</th>
            <th>Razão social</th>
            <th>Cnpj</th>
            <th width="240px">Ações</th>
        </tr>
        @foreach ($empresas as $empresa)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $empresa->nome_fantasia }}</td>
            <td>{{ $empresa->razao_social }}</td>
            <td>{{ $empresa->cnpj }}</td>
            <td>
                <form action="{{ route('empresas.destroy',$empresa->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('empresas.show',$empresa->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $empresas->links() !!}
      
@endsection