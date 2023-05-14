@extends('layouts.app')
@section('content')
<form method="post" 
action="{{url('espace_carburants/')}}" 
>
@csrf
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">

  <div class="space-y-12">
    <h2 class="text-base font-semibold leading-7 text-gray-900"></h2>
    <div class="border-b border-gray-900/10 pb-12">
      <div class="border-b border-gray-900/10 pb-12">
<p class="mt-1 text-sm leading-6 text-gray-600">____________
      <span class="text-base font-semibold leading-7 text-gray-900">Create Carburant</span>
        ____________</p>
        <div class="sm:col-span-3">
          <label for="quantite" class="block text-sm font-medium leading-6 text-gray-900">Quantite de Carburant</label>
          <div class="relative mt-2 rounded-md shadow-sm">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
              <span class="text-gray-500 sm:text-sm">L</span>
            </div>
            <input type="number" min="0" required value="{{old('quantite')}}" name="quantite" id="quantite" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00">
          </div>
          @error('quantite')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
        </div>
        <div class="sm:col-span-3">
          <label for="espace_vehicule_id" class="block text-sm font-medium leading-6 text-gray-900">Nom Vehicule</label>
          <div class="mt-2">
            <select id="espace_vehicule_id" required name="espace_vehicule_id" autocomplete="espaceVehicule-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <option value="">__Selectioner Vehicule__</option>
              @foreach ($espaceVehicules as $espaceVehicule)
                  <option value="{{$espaceVehicule->id}}"
                    @if( old('espace_vehicule_id')  == $espaceVehicule->id) selected="selected" @endif>
                    {{$espaceVehicule->nom_vehicule}}</option>
              @endforeach
            </select>
          </div>
          @error('espace_vehicule_id')
                      <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                  @enderror
        </div>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
          <div class="sm:col-span-3">
            <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Date d'operation</label>
            <div class="relative mt-2 rounded-md shadow-sm">
             <input type="date" required value="{{old('date')}}" name="date" id="kilometrage" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00">
            </div>
            @error('date')
                          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                      @enderror
          </div>
        </div>
        <div class="sm:col-span-3">
          <label for="paye" class="block text-sm font-medium leading-6 text-gray-900">Montant Paye</label>
          <div class="relative mt-2 rounded-md shadow-sm">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
              <span class="text-gray-500 sm:text-sm">DH</span>
            </div>
            <input type="number" min="0" required value="{{old('paye')}}" name="paye" id="paye" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00">
          </div>
          @error('frais')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
        </div>
      </div>
      </div>


  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ajouter</button>
  </div>
</form>
</div>
@endsection