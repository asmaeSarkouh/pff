@extends('pages.admin.dashboard.dashboard')
@section('contenu')
<div class="bg-gray-50 min-h-screen flex items-center justify-center px-16">
    <div class="relative w-full max-w-lg">
      <div class="absolute top-0 -left-4 w-72 h-72
       bg-gray-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob "></div>
      <div class="absolute top-0 -right-4 w-72 h-72 bg-gray-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
      <div class="absolute -bottom-32 left-20 w-72 h-72 bg-gray-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
      <div class="m-8 relative space-y-4">
            
<div>
    <form action="{{url('admin/marqueVehicule')}}" method="post" class="m-4 flex">
        @csrf
      <input class="rounded-l-lg w-full  p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white"
      name="marque" value="{{old('marque')}}"/>
      
      <button class=" bg-gray-300 text-white px-8 rounded-r-lg font-bold p-4 uppercase border-white-500
       border-t border-b border-r">Ajouter</button>
       <div class="text-red">
        @error('marque')
        {{$message}}
    @enderror
     </div>
  </form>

</div>

   @foreach($marqueVahicule as $marque)
        <div class="p-5 bg-white rounded-lg flex items-center justify-between space-x-8">
          <div class="flex-1 flex justify-between items-center">
            <p>{{$marque->marque}} </p>
            <form action="{{url('admin/marqueVehicule/'.$marque->id)}}" method="post">
                @csrf
                @method('delete')  
                <input type="submit" value="Suppremer" 
                class="w-24 h-6 rounded-lg bg-gray-300 text-white"                >
            </form>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection