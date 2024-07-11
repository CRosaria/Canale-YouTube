<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', 'Canale YouTube')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        {{--<link rel="stylesheet" href="{{ asset('css/admin.css')}}">--}}
        <link rel="stylesheet" href="http://127.0.0.1/Progetto_YouTube/resources/css/admin.css">
      </head>
<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand"  aria-colindex="" href="{{ route('home') }}">Home/MChannel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.video.indexadmin')}}"> Gestione Video</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('playlists') }}">Gestione Playlists</a>
              </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/contatti')}}">Gestione Systems</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contatti')}}">Gestione Apps</a>
              </li>   
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/contatti')}}">Gestione console</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Tutorial</a></li>
                  <li><a class="dropdown-item" href="#">Gameplay</a></li>
                  <li><a class="dropdown-item" href="#">Live Streaming</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <main>
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>