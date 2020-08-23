<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Desafio Orama - Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"/>
    </head>
    <body>
      <header>
        <h1>Desafio Takyorama</h1>
        <h3>Backend Laravel</h3>

        <nav class="nav">
          <ul class="nav-tabs list-unstyled">
            <li class="nav-item list-inline-item"><a href="{{ url('/contatos') }}" class="nav-link">HOME</a></li>
            <li class="nav-item list-inline-item"><a href="{{ url('/contatos/novo') }}" class="nav-link">NOVO</a></li>
            <li class="nav-item list-inline-item"><a href="{{ url('/contatos/aula') }}" class="nav-link">AULA</a></li>
            <li class="nav-item list-inline-item"><a href="{{ url('/contatos/lista') }}" class="nav-link">LISTA</a></li>
          </ul>
        </nav>
      </header>

      @yield ('app')

    </body>
</html>
