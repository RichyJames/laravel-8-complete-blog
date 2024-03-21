@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-md shadow-md">
            <h1 class="text-3xl font-bold mb-4">Edit Featured Product</h1>
            <form action="{{ route('featured.update', $featuredProduct->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Name:</label>
                    <input type="text" name="name" id="name" value="{{ $featuredProduct->name }}" class="border border-gray-300 rounded-md w-full px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-semibold mb-2">Description:</label>
                    <textarea name="description" id="description" rows="4" class="border border-gray-300 rounded-md w-full px-3 py-2" required>{{ $featuredProduct->description }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-semibold mb-2">Price:</label>
                    <input type="number" name="price" id="price" value="{{ $featuredProduct->price }}" class="border border-gray-300 rounded-md w-full px-3 py-2" required>
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Update Product</button>
            </form>
        </div>
    </div>
@endsection