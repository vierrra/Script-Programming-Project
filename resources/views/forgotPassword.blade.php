@extends('template')

@section('main_content')
<title>Esqueci minha senha</title>
	<div class="row">
		<div class="col-md-12 center">
			<img src="./img/logo.png" height="100" width="100" class="logo-image">
			<h3>Esqueci minha senha</h3>
			<form action="{{route('recoveryPassword')}}" method="POST">
				{{csrf_field()}}
				
				<div class="input-group position-input">
					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
					<input id="email" name="email" placeholder="Digite seu e-mail" class="form-control" type="email">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary button" value="Recuperar Senha">
				</div>
			</form>
		</div>
	</div>
@endsection
		