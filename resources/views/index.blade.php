@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto" style="background-image: url('/images/bck.jpg');">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Fashioning a Sustainable Future
                </h1>
             
<a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase rounded">
    Read More
</a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div class="secondrounded-image">
        <img src="{{ asset('images/shirt.jpg') }}" width="700" alt="">
    </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
            Struggling to Find Your Fashion Identity?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
            Discover Your Unique Style with Us!, Whether you're a trendsetter or someone who prefers classic elegance, finding your fashion identity can be a journey. But fear not! Here at this Fashion Blog, we're dedicated to guiding you every step of the way.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
            Unleash Your Inner Fashionista and Embrace Your True Style.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
        Fashion Styling
        </span>
        <span class="font-extrabold block text-4xl py-1">
        Fashion Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
        Fashion Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
        Fashion Brand Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
        discover the power of fashion to transform not just your wardrobe, but your entire outlook on life.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                Exploring the latest trends, finding your unique style, and navigating the ever-changing fashion landscape can be overwhelming. But fear not! With our expert guidance, you'll learn to embrace your individuality, express yourself through fashion, and confidently step into the world of style.
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div class="image-container">
    <img src="{{ asset('images/hs.jpg') }}"  alt="">
</div>
    </div>
@endsection