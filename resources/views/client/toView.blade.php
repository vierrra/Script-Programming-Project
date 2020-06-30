@extends('templates.autenticado')

@section('conteudo')
<div class="jumbotron">
    <div class="page-header">
        <span class="label label-primary">{{$client['name']}}</span>
        <span class="label label-primary">{{$client['cpf']}}</span>
        <span class="label label-primary">{{$client['email']}}</span>
    </div>
</div>
@endsection