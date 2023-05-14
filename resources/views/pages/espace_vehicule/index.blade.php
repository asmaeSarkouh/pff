
@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{asset('css/espaceVehiculeIndex.css')}}">
@endsection
@section('content')
<div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
    @foreach ($espace_vehicules as $espace_vehicule)

<div class="border-b border-gray-900/10 pb-12">
<div class="relative z-20 flex items-center overflow-hidden bg-white dark:bg-gray-800">
    <div class="container relative flex px-6 py-16 mx-auto">
        <div class="relative z-20 flex flex-col sm:w-2/3 lg:w-2/5">
            <span class="w-20 h-2 mb-12 bg-gray-800 dark:bg-white">
            
            </span>
            <h1 class="flex flex-col text-6xl font-black leading-none text-gray-800 uppercase font-bebas-neue sm:text-8xl dark:text-white">
                {{$espace_vehicule->nom_vehicule}}
                <span class="text-5xl sm:text-7xl">
                    {{$espace_vehicule->anneeMise->annee}}
                </span>
            </h1>
            <p class="text-sm text-red-400 sm:text-base dark:text-white">
                    Marque de le voiture <span class="text-red-900">______{{$espace_vehicule->marque->marque}}_____<span>
            </p>
            <p class="text-sm text-red-400 sm:text-base dark:text-white">
                    Modele de le voiture <span class="text-red-900">_____{{$espace_vehicule->modele->model}}_____<span>
            </p>
            <p class="text-sm text-red-400 sm:text-base dark:text-white">
                    Kilométrage de le voiture <span class="text-red-900">_____{{$espace_vehicule->kilometrage}} Km_____<span>
            </p>
            <p class="text-sm text-red-400 sm:text-base dark:text-white">  
                    Type carburant de le voiture <span class="text-red-900">_____{{$espace_vehicule->typeCarburant->type}}_____<span>
            </p>
            <p class="text-sm text-red-400 sm:text-base dark:text-white">
                    Consomation de le voiture <span class="text-red-900">_____{{$espace_vehicule->consomation}} L/Km_____<span>
            </p>
            <div >
            <form action="{{url('espace_vehicules/'.$espace_vehicule->id)}}" method="post">
        @csrf
        @method('delete')    
        <input type="submit" name="delete" value="Suppremer" 
                class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">   
                 </form>
                
                <a href="{{url('espace_vehicules/'.$espace_vehicule->id.'/edit')}}" 
                class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit</a>
            </div>
        </div>
        <div class="relative hidden sm:block sm:w-1/3 lg:w-3/5">
            <img src="{{ asset(str_replace('public/', 'storage/', $espace_vehicule->image)) }}" class="max-w-xs m-auto md:max-w-sm"/>
        </div>
    </div>
</div>
@endforeach
</div>
</div>
   
<a href="{{url('espace_vehicules/create')}}"
 class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
 Ajouter Vehicule</a>    

@endsection