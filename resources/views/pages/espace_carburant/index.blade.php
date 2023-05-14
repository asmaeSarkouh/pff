@extends('layouts.app')
@section('content')

  
  <div class="mt-5 py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 ">
    @foreach ($espace_carburants as $espace_carburant)
	<div class="md:w-1/3 sm:w-full rounded-lg shadow-lg bg-gradient-to-br my-3">
        <div class="flex justify-between border-b border-gray-100 px-5 py-4">
      		<div>
              <i class="fas fa-exclamation-circle text-blue-500"></i>
              <span class="font-bold text-gray-700 text-lg">{{$espace_carburant->date}}</span>
          	</div>
          <div>
            <form action="{{url('espace_carburants/'.$espace_carburant->id)}}" method="post">
              @csrf
              @method('delete')    
              <button type="submit">
                <i class="fa fa-times-circle text-red-500 hover:text-red-600 transition duration-150"></i>
              </button>
              </form> 
              
          	</div>
      	</div>
      
      	<div class="px-10 py-5 text-gray-600">
            Quantite de Carburant :<span class="text-red-900"> {{$espace_carburant->quantite}} L</span>
      	</div>
        <div class="px-10 py-5 text-gray-600">
            Montant Payé :<span class="text-red-900"> {{$espace_carburant->paye}} DH</span>
      	</div>
        <div class="px-10 py-5 text-gray-600">
            Nom de Vehicule :<span class="text-red-900"> {{$espace_carburant->espaceVehicule->nom_vehicule}} L</span>
      	</div>
      	<div class="px-5 py-4 flex justify-end">
          <a href="{{url('espace_carburants/'.$espace_carburant->id.'/edit')}}"
             class="text-sm py-2 px-3 text-gray-500 hover:text-gray-600 transition duration-150">Edit</a>
      	</div>
	</div>
  @endforeach
</div>
<a href="{{url('espace_carburants/create')}}"
  class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
  Ajouter Carburant</a> 

    
@endsection