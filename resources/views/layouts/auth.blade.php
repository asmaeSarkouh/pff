@extends('layouts.base')
@section('app')
<link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
@endsection
@section('body')
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
