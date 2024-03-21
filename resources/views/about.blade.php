@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">About Us</h1>
        <div class="flex items-center mb-4">
            <div class="w-1/2 pr-4">
                <p class="text-lg">Welcome to our fashion world! At our core, we're dedicated to bringing you the latest trends and styles straight from the runway to your wardrobe. Our mission is to inspire and empower you to express your unique sense of style with confidence. From chic urban looks to timeless classics, we curate collections that cater to every fashionista's needs.</p>
            </div>
            <div class="w-1/2">
                <img src="{{ asset('images/bck.jpg') }}" alt="About Us Image" class="w-full rounded-lg">
            </div>
        </div>
        <p class="text-lg">Join us on this fashion journey as we explore the exciting world of clothing, accessories, and everything in between. Whether you're a trendsetter or a style enthusiast, there's something for everyone here. Stay tuned for exclusive content, fashion tips, and insider insights that will elevate your wardrobe and inspire your next fashion statement.</p>
    </div>
@endsection
