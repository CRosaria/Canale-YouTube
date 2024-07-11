{{--quidiaciamoquale layout prendere--}}
@extends('layouts.app')
@section('title', 'Home')
    


@section('content')
<header>
<div class="mt-4 p-5 bg-primary text-white ">

  <div class="masthead"text-white >
  <div class="conteiner d-flex flex-column align-items-center">
    <img class="masthead-img my-5" src="http://127.0.0.1/Progetto_YouTube/storage/app/public/posters/Senza titolo.png" alt="logo">
  

    <h1 >Questo è il mio disastro 😊</h1>
    <p>Welcome, se sei arrivato qui forse cerchi aiuto!</p>
    <h3 class="my-5">Visita la nostra pagina YouTube</h3>
    <p>Se desideri un tutorial specifico esprimi un...</p>
    <p id="Test"><a class="nav-link"  href="{{ url('/contact')}}">Desiderio😊</a></p>
  </div>
</header>
<main>
  <section id="Video">
    <dir class="container d-flex flex-column align-items-center">
      <h2><a href="{{  route('videos.videoindex') }}">Video</a></h2>
      
    </dir>

  </section>
</main>

@endsection