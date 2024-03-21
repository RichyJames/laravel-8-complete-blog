@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">Featured Products</h1>
       
        @foreach($featuredProducts as $product)
            <div class="mb-8">
                <h2 class="text-xl font-bold">{{ $product->name }}</h2>
                <p class="text-gray-600">{{ $product->description }}</p>
                <p class="text-gray-500">Price: ${{ $product->price }}</p>
                <img src="{{ asset('images/book.jpg') }}" alt="{{ $product->name }}" class="mt-4" style="max-width: 20%; height: auto;">

                
                <div class="mt-4">
                    <a href="{{ route('show', $product->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View</a>
                    <a href="{{ route('featured.edit', $product->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</a>
                </div>
            </div>
        @endforeach

    
    </div>
@endsection