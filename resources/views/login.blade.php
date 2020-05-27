@extends('template')

@section('main_content')
<title>Gestor</title>
	<div class="row">
		<div class="col-md-12 center">
			<img src="./img/logo.png" height="100" width="100" class="logo-image">
			<h3>Faça seu login</h3>
			<form action="{{route('logar')}}" method="POST">
				{{csrf_field()}}
				
				<div class="form-group position-input">
					<input type="email" name="email" placeholder="Digite seu e-mail" class="form-control" />
				</div>
				<div class="form-group position-input">
					<input type="password" class="form-control" name="password" placeholder="Digite sua senha"/>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary button" value="Entrar">
				</div>
				<div class="form-group">
					<a href="{{route('forgotPassword')}}">Esqueceu sua senha?</a>
				</div>
			</form>

			@if(session('error'))
			<div class="alert-danger">
  				{{session('error')}}
			</div>
			@endif

		</div>
	</div>
	<footer>
		<div class="rodape-pagina">© 2020 Copyright:
			<a href="https://www.booking.com/hotel/br/jardins-motel.pt-br.html" target="blank">Jardins Motel</a>
		</div>
	</footer>
@endsection

