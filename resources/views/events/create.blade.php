@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie uma publicação</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Foto da festa:</label>
      <input type="file" id="image" name="image" required class="from-control-file">
    </div>
    <div class="form-group">
      <label for="title">Evento:</label>
      <input type="text" class="form-control" id="title" required name="title" placeholder="Nome do evento">
    </div>
    <div class="form-group">
      <label for="date">Data da festa:</label>
      <input type="date" class="form-control" id="date" required name="date">
    </div>
    <div class="form-group">
      <label for="title">local:</label>
      <input type="text" class="form-control" id="city" required name="city" placeholder="Local do evento">
    </div>
    <div class="form-group">
      <label for="title">Nessa foto o aniversariante tá presente?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Fale um pouco sobre a festa:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
    </div>
    <div class="form-group">
      <label for="title">Sobre o aniversariante:</label>
      <div class="form-group">	
        <input type="checkbox" checked name="items[]" value="Um anjo"> 😇
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
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>

@endsection