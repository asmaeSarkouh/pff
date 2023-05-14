@extends('pages.admin.dashboard.dashboard')
@section('contenu')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
           liste des Vehicules
            {{-- <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p> --}}
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nom de vehicule
                </th>
                <th scope="col" class="px-6 py-3">
                    Number d'immatricule
                </th>
                <th scope="col" class="px-6 py-3">
                    Marque de vehicule
                </th>
                <th scope="col" class="px-6 py-3">
                    Modele de vehicule
                </th>
                <th scope="col" class="px-6 py-3">
                    Type de carburant
                </th>
                <th scope="col" class="px-6 py-3">
                    Année de mise  
                </th>
                <th scope="col" class="px-6 py-3">
                    Consomation
                </th>
                <th scope="col" class="px-6 py-3">
                    Kilométrage
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($espace_vehicules as $espace_vehicule)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$espace_vehicule->nom_vehicule}}
                </th>
                <td class="px-6 py-4">
                    {{$espace_vehicule->immatricule}}
                </td>
                <td class="px-6 py-4">
                    {{$espace_vehicule->marque->marque}}
                </td>
                <td class="px-6 py-4">
                    {{$espace_vehicule->modele->model}}
                </td>
                <td class="px-6 py-4">
                    {{$espace_vehicule->typeCarburant->type}}
                </td>
                <td class="px-6 py-4">
                    {{$espace_vehicule->anneeMise->annee}}
                </td>
                <td class="px-6 py-4">
                    {{$espace_vehicule->consomation}}
                </td>
                <td class="px-6 py-4">
                    {{$espace_vehicule->kilometrage}}
                </td>
                <td class="px-6 py-4 text-right">
                    <form action="{{url('admin/espace_vehicules/'.$espace_vehicule->id)}}" method="post">
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
    {{$espace_vehicules->links()}}
</div>
    </div>
@endsection