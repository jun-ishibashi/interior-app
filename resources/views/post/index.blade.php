@extends('layout.app')
 
@section('content')
<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        <!-- text - start -->
        <div class="mb-10 md:mb-16">
        <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">{{config('app.name', 'Laravel')}}</h2>
        </div>
        <!-- text - end -->
    
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 md:gap-6 xl:gap-8">
        <!-- image - start -->
        @foreach($posts as $post)
        <a href="{{ route('post.show', $post->id ) }}" class="group h-48 md:h-96 flex justify-end items-end bg-gray-100 overflow-hidden rounded-lg shadow-lg relative">
            <img src="{{ asset($post->image_path) }}" loading="lazy" alt="Photo by Minh Pham" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />
    
            <div class="bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50 absolute inset-0 pointer-events-none"></div>
    
        </a>
        @endforeach
        <!-- image - end -->
        </div>
    </div>
</div>
@endsection