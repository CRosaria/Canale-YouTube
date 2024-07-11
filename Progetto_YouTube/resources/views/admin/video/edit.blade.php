@extends('layouts.admin')

@section('title', 'modifica-video')

@section('content')
<div class="container">
<h1>Modifica Video</h1>
{{--<form method="POST" action="{{ route('admin.videos.update') }}" enctype="multipart/form-data">--}}
  <form method="POST" action="{{ route('admin.video.update',$video->id) }}" enctype="multipart/form-data">
{{--<formaction="{{ route('admin.video.update',$video->id) }} " method ="POST">--}}
    @csrf
    @method('PUT')
    
    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $video->title }}">
      @error('title')
      <div class="alert alert-danger">{{ $message }}</div>  
      @enderror
      </div>
    <div class="mb-3">
      <label for="playlist_id" class="form-label">Playlist</label>
      <select name="playlist_id" id="console_id " class="form-control" request>
        @foreach ($playlists as $playlist)
        <option value="{{ $playlist->id }}"{{ $video->playlist_id == $playlist->id ?'selected' : ''}}>
          {{ $playlist->name }}</option>
          @error('playlist_id')
          <div class="alert alert-danger">{{ $message }}</div>
            @enderror
      @endforeach
    </select>
</div>
    <div class="mb-3">
      <label for="console_id" class="form-label">Console</label>
      <select name="console_id" id="console_id" class="form-control" request>
       @foreach ($consoles as $console)
          <option value="{{ $console->id }}"{{ $video->console_id == $console->id ?'selected' : ''}}>
             {{ $console->name }} </option>
              @error('console_id')
    <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    @endforeach
  </select>
  </div>
  <div class="mb-3">
    <label for="app_id" class="form-label">App</label>
    <select name="app_id" id="app_id " class="form-control" request>
      @foreach ($apps as $app)
      <option value="{{ $app->id }}"{{ $video->app_id == $app->id ?'selected' : ''}}>
        {{ $app->name }}</option>
        @error('app_id')
        <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    @endforeach
  </select>
</div>
               
      <div class="mb-3">
        <label for="year" class="form-label">year</label>
        <input type="text" class="form-control" id="year" name="year" value="{{$video->year}}">
      </div> 
      
      <div class="mb-3">
        <label for="description" class="form-label">Descrizione contenuto</label>
        <input type="text" class="form-control" id="description" name="description" value="{{$video->description}}">
       
      </div>
      <div class="mb-3">
        <label for="language" class="form-label">Lingua</label>
        <input type="text" class="form-control" id="language" name="language" value="{{$video->language}}">   
      </div>poster
      <div class="mb-3">
        <label for="link" class="form-label">Link al video</label>
        <input type="text" class="form-control" id="link" name="link" value="{{$video->link}}">
        
      </div>
      <div class="form-group">
        <label for="systems">Sistemi operativi</label><br>
         @foreach ($systems as $system)
         <input type="checkbox" id="system_{{ $system->id }}" name="systems[]" value="{{ $system->id }}"{{ $video->systems->contains($system->id) ? 'checked' : ''}}>
         <label for="system_{{ $system->id}}">{{$system->name}}</label>
                @error('system_id')
      <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      @endforeach
    </div>

      <div class="mb-3">
        <label for="poster" class="form-label">Copertina</label>
        <input type="text" class="form-control" id="poster" name="poster" value="{{$video->poster}}">
      </div>

        
      
    <button type="submit" class="btn btn-primary">Invia</button>
  </form>


@endsection