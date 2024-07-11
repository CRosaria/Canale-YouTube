@extends('layouts.admin')

@section('title', 'lista-video')

@section('content')

    <h1>Lista dei video </h1>
    <div class="row">
    <a href="{{route ('admin.video.create')}}">Inserisci un nuovo video</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Titolo</th>
          <th scope="col">Copertina</th>
          <th scope="col">Categoria</th>
          {{--<th scope="col">App</th>--}}
          <th scope="col">Link</th>
          <th scope="col">Lingua</th>
          <th scope="col">Anno</th>
          {{--<th scope="col">Descrizione</th>--}}
          <th scope="col">Modifica/Cancella</th>
          {{--<th scope="col">operazioni di modifica e cancella</th>--}}
        </tr>
      </thead>
      <tbody>
        @foreach ($videos as $video)
            
          <tr>
          <th scope="row"> {{$video->title}} </th>
          <td>@if (filter_var($video->poster, FILTER_VALIDATE_URL))
            <img src="{{ $video->poster }}" alt="{{ $video->title}}" class="img-thumbnail" style="max-width: 150px;">             
            @else
            <img src="{{ asset('storage/' . $video->poster)}}" alt="{{ $video->title }}"
            class="img-thumbnail" style="max-width: 150px;"> 
             @endif
          </td>
          
          
         
          
          <td>{{ $video->category->name }}</td>
          <td>{{ $video->link }}</td>
          <td>{{ $video->language }}</td>
          <td>{{ $video->year }}</td>
          {{--<td>{{ $video->description }}</td>--}}
         <td>
          <a href="{{ route('admin.video.edit', $video->id) }}">Modifica</a>
          <form action="{{ route('admin.video.destroy', $video->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Cancella" onclick="return confirm('Attenzio:sei sicuro di voler cancellare questo video?' )">
          </form>
         </td>
        </tr>
        @endforeach
      </tbody>
    </table>
     
        
    
@endsection