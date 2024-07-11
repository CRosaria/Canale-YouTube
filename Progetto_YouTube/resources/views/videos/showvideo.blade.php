@extends('layouts.app')
@section('title','show')
  


@section('content')
<div class="conteiner d-flex flex-column align-items-center">
<h3>{{ $video->title}} </h3>

        <td>@if (filter_var($video->poster, FILTER_VALIDATE_URL))
            <img src="{{ $video->poster }}" alt="{{ $video->title}}" class="img-thumbnail" style="max-width: 150px;">             
            @else
            <img src="{{ asset('storage/' . $video->poster)}}" alt="{{ $video->title }}"
            class="img-thumbnail" style="max-width: 150px;"> 
             @endif
          </td>
        <h2>Descrizione:{{$video->description}}</h2>
        <h3>{{$video->system_id}}</h3>
        <p>{{$video->console_id}}</p>
        <p>Link:{{$video->link}}</p>
        <p>Anno di pubblicazione:{{$video->year}}</p>
</div>
</div>
@endsection