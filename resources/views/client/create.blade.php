@extends('templates.autenticado')

@section('conteudo')
  <h1>Cadastro de Livros</h1>

		@if ($errors->any())
		<!-- ERRO NO CADASTRO -->
		<div class="alert alert-danger">
			<strong>Erro!</strong>
			@foreach($errors->all() as $erro)
			<p> {{$erro}}</p>
			@endforeach
		</div>
		<!-- [FIM] ERRO -->
		@endif

		<form action="{{route('client.save')}}" method="post">
			@csrf

			<div class="form-group">
				<label for="campo-name">Nome:</label>
				<input type="text" class="form-control" name="name" id="campo-name">
			</div>
			
			
			<div class="form-group">
				<label for="campo-titulo">Cpf:</label>
				<input type="text" class="form-control" name="cpf" id="campo-cpf">
			</div>
				
			
			<div class="form-group">
				<label for="campo-email">Email:</label>
				<input type="text" class="form-control" name="email" id="campo-email">
			</div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@endsection

