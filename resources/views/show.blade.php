@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-md shadow-md">
            <h1 class="text-3xl font-bold mb-4">{{ $featuredProduct->name }}</h1>
            <p class="text-gray-700">{{ $featuredProduct->description }}</p>
            <p class="text-gray-700 mt-4">Price: ${{ $featuredProduct->price }}</p>
            <img src="{{ asset('images/book.jpg') }}" alt="{{ $featuredProduct->name }}" class="mt-4" style="max-width: 20%; height: auto;">
        </div>
    </div>
@endsection
