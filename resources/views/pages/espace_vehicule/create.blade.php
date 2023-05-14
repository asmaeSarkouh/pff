@extends('layouts.app')
@section('content')
<form method="post" enctype="multipart/form-data" 
action="{{url('espace_vehicules')}}" 
>
@csrf
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">

  <div class="space-y-12">
    <h2 class="text-base font-semibold leading-7 text-gray-900"></h2>
    <div class="border-b border-gray-900/10 pb-12">
      <div class="border-b border-gray-900/10 pb-12">
        <p class="mt-1 text-sm leading-6 text-gray-600">____________
      <span class="text-base font-semibold leading-7 text-gray-900">Create Vehicule</span>
        ____________</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="nom_vehicule" class="block text-sm font-medium leading-6 text-gray-900">Nom Vehicule</label>
            <div class="mt-2">
              <input type="text" value="{{old('nom_vehicule')}}" placeholder="nom de vehicule" required autofocus name="nom_vehicule" id="nom_vehicule" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('nom_vehicule')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
          </div>
  
          <div class="sm:col-span-3">
            <label for="immatricule" 
            class="block text-sm font-medium leading-6 text-gray-900"
            >Immatricule</label>
            <div class="mt-2">
              <input type="text" value="{{old('immatricule')}}" placeholder="number d'immatricule" required name="immatricule" id="immatricule" autocomplete="family-name" 
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
              >
            </div>
          </div>
          @error('immatricule')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
        </div>
      </div>
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="marque_id" class="block text-sm font-medium leading-6 text-gray-900">Marque</label>
            <div class="mt-2">
              <select id="marque_id" required name="marque_id" autocomplete="marque-name" 
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
              >
                <option selected="selected">__Selectioner marque__</option>
    @foreach ($marques as $marque)
        <option value="{{$marque->id}}"
          @if( old('marque_id')  == $marque->id) selected="selected" @endif>
          {{$marque->marque}}</option>
    @endforeach
              </select>
            </div>
            @error('marque_id')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
          </div>
  
          <div class="sm:col-span-3">
            <label for="modele_id" class="block text-sm font-medium leading-6 text-gray-900">Modele</label>
          <div class="mt-2">
            <select id="modele_id" required name="modele_id" autocomplete="modele-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <option value="">__Selectioner model__</option>
      @foreach ($modeles as $modele)
          <option value="{{$modele->id}}"
            @if( old('modele_id')  == $modele->id) selected="selected" @endif>
            {{$modele->model}}</option>
      @endforeach
            </select>
          </div>
          @error('modele_id')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
          </div>
          
        </div>
      </div>
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="type_carburant_id" class="block text-sm font-medium leading-6 text-gray-900">Type Carburant</label>
            <div class="mt-2">
              <select id="type_carburant_id" required name="type_carburant_id" autocomplete="type-carburant-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="">__Selectioner type carburent__</option>
                @foreach ($type_carburants as $type_carburant)
                    <option value="{{$type_carburant->id}}"
                      @if( old('type_carburant_id')  == $type_carburant->id) selected="selected" @endif>
                      {{$type_carburant->type}}</option>
                @endforeach
              </select>
            </div>
            @error('type_carburant_id')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
          </div>
  
          <div class="sm:col-span-3">
            <label for="annee_mise_id" class="block text-sm font-medium leading-6 text-gray-900">Annee De Mise</label>
          <div class="mt-2">
            <select id="annee_mise_id" required name="annee_mise_id" autocomplete="annee-mise-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <option value="">__Selectione annee__</option>
              @foreach ($annee_mises as $annee_mise)
                  <option value="{{$annee_mise->id}}"
                    @if( old('annee_mise_id')  == $annee_mise->id) selected="selected" @endif>
                    {{$annee_mise->annee}}</option>
              @endforeach
            </select>
          </div>
          @error('annee_mise_id')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
          </div>
          
        </div>
      </div>
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label for="consomation" class="block text-sm font-medium leading-6 text-gray-900">Consomation</label>
          <div class="relative mt-2 rounded-md shadow-sm">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-2">
              <span class="text-gray-500 sm:text-sm">L/100Km</span>
            </div>
            <input type="number" min="0" required value="{{old('consomation')}}" name="consomation" id="consomation" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00">
          </div>
          @error('consomation')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
        </div>

        <div class="sm:col-span-3">
          <label for="kilometrage" class="block text-sm font-medium leading-6 text-gray-900">Kilométrage</label>
          <div class="relative mt-2 rounded-md shadow-sm">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
              <span class="text-gray-500 sm:text-sm">Km</span>
            </div>
            <input type="number" min="0" required value="{{old('kilometrage')}}" name="kilometrage" id="kilometrage" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00">
          </div>
          @error('kilometrage')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
        </div>
        <div class="col-span-full">
          <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Select image</label>
          <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
            <div class="text-center">
              <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
              </svg>
              <div class="mt-4 flex text-sm leading-6 text-gray-600">
                <label for="image" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                  <span>Upload a file</span>
                  <input id="image" name="image" type="file" class="sr-only" >
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
        </div>
        @error('image')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
      </div>
      

  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
    Ajouter</button>
  </div>
</form>
</div>
@endsection