@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editando: {{ $event->title }}</h1>
  <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="image">foto da festa:</label>
      <input type="file" id="image" name="image" class="from-control-file">
      <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
    </div>
    <div class="form-group">
      <label for="title">Evento:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{ $event->title }}">
    </div>
    <div class="form-group">
      <label for="date">Data da festa:</label>
      <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
    </div>
    <div class="form-group">
      <label for="title">Local</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" value="{{ $event->city }}">
    </div>
    <div class="form-group">
      <label for="title">Nessa foto o aniversariante tá presente?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Fale um pouco sobre a festa:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?">{{ $event->description }}</textarea>
    </div>
    <div class="form-group">
      <label for="title">Sobre o aniversariante:</label>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Um anjo"> 😇
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="love"> 😍
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Apaixonada">  🥰
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Meu amor"> 💕
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="corre"> 🏃
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="inteligente"> 🧠
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="encantada"> 🤩
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Editar Evento">
  </form>
</div>

@endsection