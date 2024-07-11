
@extends('layouts.app')


@section('title', 'videos')
  


@section('content')

<div class=" p-5 bg-primary text-white rounded">
  {{--@dd($categories)--}}
  <div class="conteiner d-flex flex-column align-items-center">
    <h1>Video</h1>
    <div class="row">
      
    @foreach ($videos as $video)
     {{-- @dd($systems)--}} 
    <div class="col-md-6 col-lg-4">
    <div class="card" style="width: 18rem;">
      <td>@if (filter_var($video->poster, FILTER_VALIDATE_URL))
        <img src="{{ $video->poster }}" alt="{{ $video->title}}" class="img-thumbnail" style="max-width: 150px;">             
        @else
        <img src="{{ asset('storage/' . $video->poster)}}" alt="{{ $video->title }}"
        class="img-thumbnail" style="max-width: 150px;">
            
        @endif</td>
      {{--<img src="C:\Users\LENOVO\Documents\Playlist\Copertine\7zip0.jpg" class="card-img-top" alt="immagine">--}}
      <div class="card-body">
        {{--<h5 class="card-title"> {{$video->title}} </h5>--}}
        <p class="card-text">descrizione: {{$video->description}}</p>
      </div>
      <ul class="list-group list-group-flush">
        {{--<li class="list-group-item"><link rel="stylesheet" href=""></li>--}}
        {{--<li class="list-group-item">App:{{$video->app->name}}</li>--}}
        {{--<li class="list-group-item">Categoria:{{$video->category->name}}</li>--}}
       <li class="list-group-item">Sistema operativo:
        @foreach ($video->systems as $system)
        {{ $system->name }}
          @unless ($loop->last), @endunless           
        @endforeach
      </li>
      <li class="list-group-item">Console:
        @foreach($video->consoles as $console)
        {{ $console->name }}
        @unless ($loop->last), @endunless            
        @endforeach
      </li>
      </ul>
               <a href=" {{ route('videos.showvideo', $video->id)}}" class="card-link">Mostra Dettagli</a>
        </div>   
      </div>
    @endforeach
  </div>
    </div>
  </div>
  </div>
  </div>


    
@endsection