<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <title>Edicção Clientes</title>
    <h1>Edição de Clientes</h1>
    <form action="{{route('client.update', ['id' => $client['id']])}}" method="post">
        @csrf
        
        <div class="form-group">
            <label for="campo-name">Nome:</label>
        <input type="text" class="form-control" name="name" id="campo-name" value="{{old('name', $client['name'])}}">
        </div>
        
        <div class="form-group">
            <label for="campo-cpf">Cpf:</label>
            <input type="text" class="form-control" name="cpf" id="campo-cpf" value="{{old('cpf', $client['cpf'])}}">
        </div>
            
        <div class="form-group">
            <label for="campo-email">Email:</label>
            <input type="text" class="form-control" name="email" id="campo-email" value="{{old('email', $client['email'])}}">
        </div>

        <button type="submit" class="btn btn-default">Editar</button>				
    </form>
</body>
</html>
		

		{{--  @if ($errors->any())
		<!-- ERRO NO CADASTRO -->
		<div class="alert alert-danger">
			<strong>Erro!</strong>
			@foreach($errors->all() as $erro)
			<p> {{$erro}}</p>
			@endforeach
		</div>
		<!-- [FIM] ERRO -->
		@endif  --}}


		
