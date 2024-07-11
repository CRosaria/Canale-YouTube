<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', 'Canale YouTube')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="http://127.0.0.1/Progetto_YouTube/resources/css/app.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand"  aria-colindex="" href="{{route ('admin.video.indexadmin')}}">Mchannel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item" >
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('videos.videoindex')}}">Video</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('playlists') }}">Playlist</a>
                      </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact')}}">Contatti</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
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
        <div class=" p-5 bg-primary text-white rounded">
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>