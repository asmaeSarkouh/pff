@extends('layouts.app')
@section('content')
<h2 class="h2">VEHICULE 1</h2>
  <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
  @foreach($table_de_bords as $table_de_bord)
  <div class="relative w-full h-full">
  <div class="absolute hidden w-full bg-gray-50 lg:block h-96"></div>
  <div class="relative px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-gray-400 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
            <defs>
              <pattern id="2c67e949-4a23-49f7-bf27-ca140852cf21" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#2c67e949-4a23-49f7-bf27-ca140852cf21)" width="52" height="24"></rect>
          </svg>
          <span class="relative">VEHICULE</span>
        </span>
      </h2>
      <p class="text-base text-gray-700 md:text-lg">
        {{$table_de_bord->espaceVehicule->nom_vehicule}}      
      </p>
    </div>
    <div class="grid max-w-screen-md gap-10 md:grid-cols-2 sm:mx-auto">
      <div>
        <div class="p-8 bg-gray-900 rounded">
          <div class="mb-4 text-center">
            <p class="text-xl font-medium tracking-wide text-white">
              Ce mois
            </p>
            <div class="flex items-center justify-center">
              <p class="mr-2 text-5xl font-semibold text-white lg:text-6xl">
                $39
              </p>
              <p class="text-lg text-gray-500">/ month</p>
            </div>
          </div>
          <ul class="mb-8 space-y-2">
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-teal-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="text-sm text-gray-300">
                Total couts carburant :{{$table_de_bord->espaceCarburant->sum('paye')}}MAD
              </p>
            </li>
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-teal-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="text-sm text-gray-300">
                Total carburant consome :{{$table_de_bord->espaceCarburant->sum('quantite')}} L/100Km
              </p>
            </li>
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-teal-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="text-sm text-gray-300">
                Total couts maintenance :{{$table_de_bord->espaceMaintenance->sum('frais')}}MAD
              </p>
            </li>
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-teal-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="text-sm text-gray-300">
                Nombre d'operation maintenance :{{$table_de_bord->espaceMaintenance->count('date')}}
              </p>
            </li>
          </ul>
        </div>
        <div class="w-11/12 h-2 mx-auto bg-gray-900 rounded-b opacity-75"></div>
        <div class="w-10/12 h-2 mx-auto bg-gray-900 rounded-b opacity-50"></div>
        <div class="w-9/12 h-2 mx-auto bg-gray-900 rounded-b opacity-25"></div>
      </div>
      <div>
        <div class="p-8 bg-gray-900 rounded">
          <div class="mb-4 text-center">
            <p class="text-xl font-medium tracking-wide text-white">Pro Plan</p>
            <div class="flex items-center justify-center">
              <p class="mr-2 text-5xl font-semibold text-white lg:text-6xl">
                $59
              </p>
              <p class="text-lg text-gray-500">/ month</p>
            </div>
          </div>
          <ul class="mb-8 space-y-2">
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-teal-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="text-base  text-gray-300">
                Couts maintenance : {{$table_de_bord->espaceMaintenance->sum('frais')}}MAD
              </p>
            </li>
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-teal-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="text-base  text-gray-300">
                Consomation carburant:{{$table_de_bord->espaceCarburant->sum('quantite')}} L/Km
              </p>
            </li>
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-teal-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="text-base  text-gray-300">
                couts carburant:{{$table_de_bord->espaceCarburant->sum('paye')}}MAD
              </p>
            </li>
          </ul>
          <div
            class="inline-flex items-center 
            justify-center w-full font-semibold tracking-wide 
            text-teal-900 transition duration-200 rounded shadow-md bg-teal-accent-400 
            hover:bg-teal-accent-700 focus:shadow-outline focus:outline-none"
          >
           
        </div>
        </div>
        <div class="w-11/12 h-2 mx-auto bg-gray-900 rounded-b opacity-75"></div>
        <div class="w-10/12 h-2 mx-auto bg-gray-900 rounded-b opacity-50"></div>
        <div class="w-9/12 h-2 mx-auto bg-gray-900 rounded-b opacity-25"></div>
      </div>
    </div>
  </div>
</div>
@endforeach
</div>
{{-- <div class="mb-10 sm:mb-0 mt-10 grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
  <div class="group bg-gray-900/30 py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/40 hover:smooth-hover">
    <a class="bg-gray-900/70 text-white/50 group-hover:text-white group-hover:smooth-hover flex w-20 h-20 rounded-full items-center justify-center" href="#">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
      </svg>
    </a>
    <a class="text-white/50 group-hover:text-white group-hover:smooth-hover text-center" href="#">Create group</a>
  </div> --}}
@endsection