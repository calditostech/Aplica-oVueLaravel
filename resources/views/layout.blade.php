<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>{{ config('app.name') }}  :: @yield('title')</title>

    <!--Fonte do Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!--CSS Bootstrap -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!--CSS da aplicação --> 
         <link rel="stylesheet" href="/css/styles.css">
         <script src="/js/scripts.js"></script>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand navbar-light" href="/">Ricardo Eventos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @auth
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/create">Criar Evento</a>
        </li>
        @endauth
        @guest
        <li class="nav-item">
          <a class="nav-link navbar-light" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-light" href="/register">Registrar</a>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
      <div id="app">
             <primeiro-component></primeiro-component>
             <footer-component></footer-component>
      </div>
</body>
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</html>