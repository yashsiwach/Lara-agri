@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-semibold text-green-700 text-center mb-6">Government Schemes</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($schemes as $scheme)
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition duration-300">
                <h3 class="text-xl font-semibold text-green-600 mb-2">{{ $scheme->title }}</h3>
                <p class="text-gray-700 mb-4">{{ $scheme->description }}</p>
                <a href="{{ $scheme->link }}" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:text-blue-700 hover:underline transition duration-300">
                    Learn More
                </a>
            </div>
        @endforeach
    </div>
@endsection