@extends('pages.admin.dashboard.dashboard')
@section('contenu')
<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg">
      <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
        Create Modele Vehicule
      </h1>
      <form
        action="{{url('admin/modeleVehicule')}}"
        method="post"
        class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8"
      >
      @csrf
        <div>
          <label class="sr-only">Modele</label>
  
          <div class="relative">
            <input
              type="text"
              class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
             value="{{old('model')}}"
             name="model"
             placeholder="nom modele"
              />
          </div>
          <div class="text-red">
            @error('model')
                {{$message}}
            @enderror
          </div>
        </div>
        <div>
          <label class="sr-only">Marque List</label>
          <div class="relative">
            <select id="marque_id" name="marque_id" 
            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm">
            <option selected>Select marque</option>
            @foreach ($marques as $marque)
                <option value="{{$marque->id}}"
                    @if( old('marque_id')  == $marque->id) selected="selected" @endif>
                    {{$marque->marque}} </option>
            @endforeach
          </select>
          </div>
          <div class="text-red">
            @error('marque_id')
                {{$message}}
            @enderror
          </div>
        </div>
  
        <button
          type="submit"
          class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
        >
          Ajouter
        </button>
      </form>
    </div>
  </div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">


    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
           liste des Modeles Vehicules
            {{-- <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p> --}}
        </caption>
        
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nom de marque
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom de modele
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($modeleVehicule as $modele)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 ">
                    {{$modele->marque->marque}}
                </td>
                <td class="px-6 py-4">
                    {{$modele->model}}
                </td>
                <td class="px-6 py-4 text-right">
                    <form action="{{url('admin/modeleVehicule/'.$modele->id)}}" method="post">
                        @csrf
                        @method('delete')  
                        <input type="submit" value="Suppremer" 
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                        >
                    </form>
                </td>
            </tr>
          @empty 
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td>
                <h4 class="text-center text-gray-500 dark:text-gray-400">il n'y a pas de vehicule</h4>
            </td>
        </tr>
          @endforelse
        </tbody>
    </table>
    {{$modeleVehicule->links()}}
</div>
    </div>
@endsection