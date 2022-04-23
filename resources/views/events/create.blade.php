@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie anúncio</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Poste uma foto sobre o rolê:</label>
      <input type="file" id="image" name="image" required  class="from-control-file">
    </div>
    <div class="form-group">
      <label for="title">tipo de Evento:</label>
      <input type="text" class="form-control" id="title" required name="title" placeholder="Nome do evento">
    </div>
    <div class="form-group">
      <label for="date">Data do rolê</label>
      <input type="date" class="form-control" id="date" required name="date">
    </div>
    <div class="form-group">
      <label for="title">Local:</label>
      <input type="text" class="form-control" id="city" required name="city" placeholder="Local do evento">
    </div>
    <div class="form-group">
      <label for="title">Qual seu instagram</label>
      <input type="text" class="form-control" id="instagram" required name="instagram" placeholder="Cole aqui a url do seu instagram'">
    </div>
    <div class="form-group">
      <label for="title">Esse Evento conta com algum suporte</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Fale um pouco sobre esse anúncio:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
    </div>
    <div class="form-group">
      <label for="title">Esse anúncio é sobre:</label>
      <div class="form-group">	
        <input type="checkbox" checked name="items[]" value="Urban geral"> Urban geral
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="urban avançado">Urban avançado
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Praticar slalom">Praticar slalom
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="confraternização">confraternização
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="aniversário">aniversário
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="viagens">Viagens
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Passeios">Passeios
      </div> 
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>

@endsection