@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-semibold text-green-700 text-center mb-6">Agriculture & Rural Development Information</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($informationPages as $page)
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition duration-300">
                <h3 class="text-xl font-semibold text-green-600 mb-2">{{ $page->title }}</h3>
                <p class="text-gray-700 mb-4">
                    {{--  Limit the content for the index page --}}
                    {{ Str::limit(strip_tags($page->content), 200) }}
                </p>
                <a href="{{ url('/information/' . $page->slug) }}" class="text-blue-500 hover:text-blue-700 hover:underline transition duration-300">
                    Read More
                </a>
            </div>
        @endforeach
    </div>
@endsection