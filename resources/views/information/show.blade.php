@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-semibold text-green-700 mb-4">{{ $page->title }}</h2>
    <div class="bg-white rounded-lg shadow-md p-6">
        {!! $page->content !!}
    </div>
     <div class="mt-8">
       <a href="{{ url('/information') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
           Back to Information
       </a>
   </div>
@endsection
