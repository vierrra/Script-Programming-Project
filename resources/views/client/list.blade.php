@extends('templates.autenticado')

@section('conteudo')
<title>Cliente</title>
  <h1>Clientes</h1>
  <table class="table table-hover">
      <thead>
        <tr>
          <th>Nome Completo</th>
          <th>Cpf</th>
          <th>Email</th>
          <th width="10%">Opções</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($clients as $client)
        <tr>
            <td>{{$client['name']}}</td>
            <td>{{$client['cpf']}}</td>
            <td>{{$client['email']}}</td>
            <td>
              <a href="{{route('client.edit', ['id' => $client['id']])}}">Editar</a>
              <a href="{{route('client.delete', ['id' => $client['id']])}}">Excluir</a>
            </td>
        </tr>
        @endforeach
      </tbody>
  </table>
@endsection