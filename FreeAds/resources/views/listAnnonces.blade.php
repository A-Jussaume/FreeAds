<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left: 15%;">
      {{ __('Liste des annonces') }}
    </h2>
  </x-slot>
  <div class="container" style="margin-top:1em;">
    <div style='margin:auto' class="col-8">
      @foreach ($ads as $ad)
      <div class="card" style="width: 100%;">
        <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $ad->title }}</h5>
          <p class="card-title">Prix : {{ $ad->price }} euros</p>
          <small>{{ Carbon\Carbon::parse($ad->created_at)->diffForHumans() }}</small>
          <p class="card-text text-info">{{ $ad->region }}</p>
          <p class="card-text">{{ $ad->description }}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      @endforeach
      {{ $ads->links() }}
    </div>

</x-app-layout>