@extends('layouts.app')
@section('content')
<div class="container mt-8">
    <div class="row">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 ">
            @foreach ($espace_maintenances as $espace_maintenance)
        <div class=" inset-x-0 bottom-0 p-4">
            <div class="relative rounded-lg bg-gray-100 p-6 shadow-sm">
              
              <form action="{{url('espace_maintenances/'.$espace_maintenance->id)}}" method="post">
                @csrf
                @method('delete')    
                <button
                type="submit"
                class="absolute -end-1 -top-1 rounded-full border border-gray-200 bg-white p-1 text-gray-400"
              >
                <span class="sr-only">Close</span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-3 w-3"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  />
                </svg>
              </button></form>
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <img
                  {{-- src="{{ asset(str_replace('public/', 'storage/', $espace_maintenance->image)) }}" --}}
                  src="{{asset('images/huyndai.jpeg')}}"
                  class="h-full w-full rounded-xl object-cover"
                />
          
                <div>
                  <h2 class="text-lg font-medium">
                    {{$espace_maintenance->nom_maintenance}}
                  </h2>
          
                  <p class="mt-4 text-sm text-gray-500">
                    Date d'operation :<span class="text-red-900"> {{$espace_maintenance->date}}</span>
                  </p>
                  <p class="mt-4 text-sm text-gray-500">
                    Date d'operation :<span class="text-red-900"> {{$espace_maintenance->date}}</span>
                  </p>
                  <p class="mt-4 text-sm text-gray-500">
                    Le frais de la maintenance:<span class="text-red-900"> {{$espace_maintenance->frais}} DH</span>
                  </p>
                  <p class="mt-4 text-sm text-gray-500">
                    Type de maintenance  :<span class="text-red-900"> {{$espace_maintenance->typeMaintenance->type}}</span>
                  </p>
                  <p class="mt-4 text-sm text-gray-500">
                    Kilométrage  :<span class="text-red-900"> {{$espace_maintenance->kilometrage}}</span>
                  </p>
                  <p class="mt-4 text-sm text-gray-500">
                    Nom de vehicule maintenu :<span class="text-red-900"> {{$espace_maintenance->espaceVehicule->nom_vehicule}}</span>
                  </p>
                  <a href="{{url('espace_maintenances/'.$espace_maintenance->id.'/edit')}}" class="text-white mt-5 bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 
                    dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit</a>
                  
                
                </div>
              </div>
            </div>
          </div>
        @endforeach
       
        </div>
        
    </div>
</div>
 <a href="{{url('espace_maintenances/create')}}"
 class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
 Ajouter Maintenance</a> 
 @endsection