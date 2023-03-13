<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left: 15%;">
      {{ __('Nouvelle annonce') }}
    </h2>
  </x-slot>
  <div class="container" style="margin-top:1em;">
    <form style='margin:auto' class="col-8" method="POST" action="{{ route('storeAnnonce') }}">
      @csrf
      <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="title" id="validationCustom01" placeholder="Titre">
        @if ($errors->has('title'))
        <span class="invalid-feedback">{{ $errors->first('title') }}</span>
        @endif
      </div>    
       <br>      
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" rows="5"></textarea>
        @if ($errors->has('description'))
        <span class="invalid-feedback">{{ $errors->first('description') }}</span>
        @endif
      </div>
        <br>   
      <div class="form-group">
        <label for="price">Prix</label>
        <input type="number" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" name="price" id="price" placeholder="prix">
        @if ($errors->has('price'))
        <span class="invalid-feedback">{{ $errors->first('price') }}</span>
        @endif
      </div>
      <div>
        <br>
      </div>
      <label for="photo">Photo</label>
      <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupFile01">Upload</label>
        <input type="file" class="form-control {{ $errors->has('photo') ? 'is-invalid' : '' }}" name="photo" id="inputGroupFile01">
        @if ($errors->has('price'))
        <span class="invalid-feedback">{{ $errors->first('photo') }}</span>
        @endif
      </div>
      <div>
      </div>
      <label for="localisation">Localisation</label>
      <div class="input-group mb-3">
        <label class="input-group-text" for="region">Région</label>
        <select class="form-select" name="region" id="region">
          <option name="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
          <option value="Bourgogne-Franche-Comté">Bourgogne-Franche-Comté</option>
          <option value="Bretagne">Bretagne</option>
          <option value="Centre-Val de Loire">Centre-Val de Loire</option>
          <option value="Corse">Corse</option>
          <option value="Grand Est">Grand Est</option>
          <option value="Hauts-de-France">Hauts-de-France</option>
          <option value="Île-de-France">Île-de-France</option>
          <option value="Île-de-France">Normandie</option>
          <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
          <option value="Occitanie">Occitanie</option>
          <option value="Pays de la Loire">Pays de la Loire</option>
          <option value="Provence-Alpes-Côte d'Azur">Provence-Alpes-Côte d'Azur</option>
          @if ($errors->has('region'))
          <span class="invalid-feedback">{{ $errors->first('region') }}</span>
          @endif
        </select>
      </div>
     
      <div>
        <button type="submit" class="btn btn-primary">Valider</button>
      </div>
    </form>
  </div>
</x-app-layout>