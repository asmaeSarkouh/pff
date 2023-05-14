@extends('pages.admin.dashboard.dashboard')
@section('contenu')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
           liste des utilisateurs
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nom Utilisateur
                </th>
                <th scope="col" class="px-6 py-3">
                    Email Utilisateur
                </th>
                <th scope="col" class="px-6 py-3">
                    Nomber Vehicules
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$user->name}}
                </th>
                <td class="px-6 py-4">
                    {{$user->email}}
                </td>
                <td class="px-6 py-4">
                    2
                    {{-- {{$user->espaceVehicules->nom_vehicule}} --}}
                </td>
                <td class="px-6 py-4 text-right">
                    <form action="{{url('admin/users/'.$user->id)}}" method="post">
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
                <h4 class="text-center text-gray-500 dark:text-gray-400">il n'y a pas d'utilisateur</h4>
            </td>
        </tr>
          @endforelse
        </tbody>
    </table>
</div>

   
    </div>
@endsection