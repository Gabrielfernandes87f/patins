@extends('layouts.main')

@section('title', $event->title)

@section('content')
<link href="/assets01/css/style.css" rel="stylesheet">

  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
        <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
      </div>
      <div id="info-container" class="col-md-6">
        <h1>{{ $event->title }}</h1>
        <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{ $event->city }}</p>
        <p class="event-city"><ion-icon name="location-outline"></ion-icon>
        <a class="btn-instagram" href="{{ $event->instagram }}">Instagram</a>
          
        </p>
        <p class="events-participants"><i class="bi bi-people"></i> {{ count($event->users) }} Participantes</p>
        <p class="event-owner"><i class="bi bi-person-bounding-box"></i> {{ $eventOwner['name'] }}</p>
        @if(!$hasUserJoined)
          <form action="/events/join/{{ $event->id }}" method="POST">
            @csrf
            <a href="/events/join/{{ $event->id }}" 
              class="btn btn-primary" 
              id="event-submit"
              onclick="event.preventDefault();
              this.closest('form').submit();">
              Confirmar Presença
            </a>
          </form>
        @else
          <p class="already-joined-msg">Você já está participando desse anúncio!</p>
        @endif
        <h3>Sobre o anúncio:</h3>
        <ul id="items-list">
        @foreach($event->items as $item)
          <li><ion-icon name="play-outline"></ion-icon> <span>{{ $item }}</span></li>
        @endforeach
        </ul>
      </div>
      <div class="col-md-12" id="description-container">
        <h3>Sobre o anúncio</h3>
        <p class="event-description">{{ $event->description }}</p>
      </div>
    </div>
  </div>

@endsection