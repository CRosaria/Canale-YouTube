@extends('layouts.admin')

@section('title', 'lista-video')

@section('content')
{{--@dd($consoles)--}}
<div class="container">
<h1>Inserimento di un nuovo Video</h1>
{{--<form action="{{ route('admin.video.store') }}" method ="POST">--}}
    
  <form method="POST" action="{{ route('admin.video.store') }}" enctype="multipart/form-data">
  @method('POST')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" required>
      @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="mb-3">
  <label for="playlist-id" class="form-label">Playlist</label>
  <select name="playlist_id" id="playlist_id" class="form-control">
   @foreach ($playlists as $playlist)
      <option value="{{ $playlist->id}}">{{ $playlist->name }} </option>
          @error('playlist_id')
<div class="alert alert-danger">{{ $message }}</div>
  @enderror
@endforeach
</select>
      </div>  
<div class="mb-3">
  <label for="app-id" class="form-label">App</label>
  <select name="app_id" id="app_id" class="form-control">
   @foreach ($apps as $app)
      <option value="{{ $app->id}}"> {{ $app->name }} </option>
          @error('app_id')
<div class="alert alert-danger">{{ $message }}</div>
  @enderror
@endforeach
</select>
      </div>  
      
      <div class="mb-3">
        <label for="year" class="form-label">Anno</label>
        <input type="text" class="form-control" id="year" name="year" required>
        @error('year')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      </div>
      <div class="mb-3">
        <label for="description" class="tex-muted">Descrizione contenuto</label>
        <textarea name="description" id="description" class="form-control" required></textarea>
        
        {{--<input type="text" class="form-control" id="description" name="description" required>--}}
        @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      </div>
      <div class="mb-3">
        <label for="language" class="form-label">Lingua</label>
        <input type="text" class="form-control" id="language" name="language" required>
        @error('language')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      </div>
      <div class="mb-3">
        <label for="link" class="form-label">Link al video</label>
        <input type="text" class="form-control" id="link" name="link" required>
        @error('link')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      </div>
      <div class="form-group mb-4">inserire i poster
        <label for="poster" class="text-primary">Copertina</label>
        <input type="file" name="poster"  id="poster" class="form-control-file" required>
        @error('poster')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
  <label for="console-id" class="form-label">Console</label>
  <select name="console_id" id="console_id" class="form-control">
   @foreach ($consoles as $console)
      <option value="{{ $console->id}}"> {{ $console->name }} </option>
          @error('console_id')
<div class="alert alert-danger">{{ $message }}</div>
  @enderror
@endforeach
</select>
      </div>  
      <div class="mb-3">
        <label for="console-id" class="form-label">Sistema Operativo Proprietario</label><br>
        @foreach ($systems as $system)
        <input type="checkbox"  id="system_{{$system->id}}" name="systems[]" value="{{$system->id}}"> 
        <label for="system_{{$system->id}}"> {{$system->name}} </label>
            @error('system_id')
              <div class="alert alert-danger">{{ $message }}</div>
             @enderror
     @endforeach
           </div>  
    <button type="submit" class="btn btn-primary">Invia</button>
  </form>
</div>

@endsection