@extends('layouts.app')

@section('content')
<section class="relative h-[60vh] flex items-center justify-center bg-gray-900 overflow-hidden">
    <div class="absolute inset-0 opacity-40">
        <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811" class="w-full h-full object-cover" alt="Background Gallery">
    </div>
    <div class="relative z-10 text-center text-white px-4">
        <h1 class="text-5xl md:text-8xl font-serif font-black uppercase tracking-tighter italic">
            Gallery
        </h1>
        <div class="w-24 h-1 bg-resort-gold mx-auto mt-6"></div>
        <p class="mt-6 text-sm md:text-base tracking-[0.4em] uppercase font-light">Visual Experience</p>
    </div>
</section>

@include('sections.gallery')
@endsection