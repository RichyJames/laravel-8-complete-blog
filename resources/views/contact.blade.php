@extends('layouts.app')

@section('content')
    <div class="container bg-gray-100 py-8 px-4 rounded">
        <h1 class="text-black text-3xl mb-6">Contact Us</h1>
        <p class="text-black mb-6">Have a question or feedback? We'd love to hear from you! Fill out the form below and we'll get back to you as soon as possible.</p>
        
        <form action="{{ route('send-message') }}" method="POST" class="mb-8">
            @csrf
            <div class="mb-4">
                <label for="name" class="text-black">Your Name:</label>
                <input type="text" name="name" id="name" class="form-control bg-gray-50 rounded p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="email" class="text-black">Your Email:</label>
                <input type="email" name="email" id="email" class="form-control bg-gray-50 rounded p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="message" class="text-black">Your Message:</label>
                <textarea name="message" id="message" class="form-control bg-gray-50 rounded p-2 w-full" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-gray-50 hover:text-black px-4 py-2 rounded">Send Message</button>
        </form>
    </div>
@endsection
