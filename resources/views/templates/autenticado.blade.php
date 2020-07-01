<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link href="{{url('css/style.css')}}" rel="stylesheet">
		<title>Início</title>
	</head>
	<body>
		<div>
			<div class="row">
				<div class="col-md-12 center">
					<img src="{{url('/img/logo_with_name.jpg')}}" height="200" width="200" class="logo-image">
				</div>
				<div class="col-md-12 center">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<div class="navbar-header">
								<img src="{{url('img/logo.png')}}" height="50" width="50" class="logo-image-menu">
							</div>
							<ul class="nav navbar-nav">
								<li class="active m-l-10"><a href="{{route('mainScreen')}}">Início</a></li>
								<li><a href="{{route('reception')}}">Tela da Recepção</a></li>
								<li><a href="{{route('client.list')}}">Clientes</a></li>
								<li><a href="{{route('collaborators.list')}}">Funcionários</a></li>
								<li><a href="#">Produtos</a></li>
								<li><a href="#">Relatórios</a></li>
								<li><a href="#" data-toggle="modal" data-target="#myModal">Sair</a></li>
								<li><a><i><b>Olá {{session('name')}}</b></i></a></li>
							</ul>
						</div>
					</nav>
				</div>				
			</div>
			
			<div style="padding: 0px 20px;">
				@yield('conteudo')
			</div>

			<div class="col-md-12">
				<img src="{{url('img/background_white.jpg')}}" height="800" width="100%">
			</div>
		</div>

	
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-sm" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
			  </button>
			  <h4 class="modal-title" id="myModalLabel">Atenção</h4>
			</div>
			<div class="modal-body">
			  <p>Deseja sair do Sistema ?</p>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
			  <a class="btn btn-primary" href="{{route('logout')}}">Sim</a>
			</div>
		  </div>
		</div>
	  </div>
	</body>
</html>