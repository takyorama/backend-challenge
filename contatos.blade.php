<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Desafio Backend</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
			.menu{list-style:none}
			.item{display:inline-block;padding:.3em}
			.item:hover{background-color:#DDD}
        </style>
    </head>
    <body>
		<h1>Desafio Backend</h1>

		<ul id="menu" class="menu">
			<li class="item btn">
				<a href="#"></a>
			</li>
			<li class="item">
				<a href="#">Cadastrar</a>
			</li>
			<li class="item">
				<a href="#">Editar</a>
			</li>
		</ul>
		
		@section('lista')
		<div id="conteudo">
			@yield('conteudo')
		</div>
		@stop
    </body>
</html>
