@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-semibold text-green-700 mb-4">{{ $scheme->title }}</h2>
    <div class="bg-white rounded-lg shadow-md p-6">
        <p class="text-gray-700 mb-4">{{ $scheme->description }}</p>
        <a href="{{ $scheme->link }}" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:text-blue-700 hover:underline transition duration-300">
            Learn More
        </a>
    </div>
    <div class="mt-8">
        <a href="{{ url('/schemes') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Back to Schemes
        </a>
    </div>
@endsection