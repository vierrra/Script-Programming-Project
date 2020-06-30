@extends('template')

@section('main_content')
<title>Gestor</title>
	<div class="row">
		<div class="col-md-12 center">
			<img src="./img/logo.png" height="100" width="100" class="logo-image">
			<h3>Faça seu login</h3>
			
				<div class="form-group">
					<button type="button" class="btn btn-primary button" value="Entrar">
                    <a class="btn btn-primary" href="{{route('login')}}">Entrar</a>
                </div>
		</div>
	</div>

	<script 
		src="https://unpkg.com/blip-chat-widget" type="text/javascript">
	</script>
	<script>
		(function () {
			window.onload = function () {
				localStorage.removeItem('blipSdkUAccount'); 
				new BlipChat()
				.withAppKey('XXX')
    			.withTarget('chatContainer')
				.withAppKey('amFyZGluc2NoYXRib3Q6NjEwMTY3ZDgtZDFmZi00NDQyLWI2ZDQtOGZlN2I2NDExMGM4')
				.withButton({"color":"#2CC3D5","icon":""})
				.withCustomCommonUrl('https://chat.blip.ai/')
				.build();
			}
		})();
	</script>						
	<footer>
		<div class="rodape-pagina">© 2020 Copyright:
			<a>Jardins Motel</a>
		</div>
	</footer>
@endsection

