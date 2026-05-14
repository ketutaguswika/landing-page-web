@extends('layouts.app')

@section('content')
<!-- Hero Section Khusus About -->
<section class="relative h-[60vh] flex items-center justify-center bg-gray-900 overflow-hidden">
    <div class="absolute inset-0 opacity-40">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" class="w-full h-full object-cover" alt="Background">
    </div>
    <div class="relative z-10 text-center text-white px-4">
        <h1 class="text-5xl md:text-8xl font-serif font-black uppercase tracking-tighter italic">
            About <span class="text-resort-gold not-italic">Us</span>
        </h1>
        <div class="w-24 h-1 bg-resort-gold mx-auto mt-6"></div>
        <p class="mt-6 text-sm md:text-base tracking-[0.4em] uppercase font-light">The Story Behind Green Resort</p>
    </div>
</section>

<!-- Content Section (Refactor dari kodemu) -->
<section class="py-24 px-6 max-w-7xl mx-auto bg-white">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
        <!-- Text Content -->
        <div class="space-y-8 order-2 lg:order-1">
            <div class="space-y-2">
                <span class="text-resort-gold font-bold uppercase tracking-[0.3em] text-xs">Our Heritage</span>
                <h2 class="text-4xl md:text-5xl font-serif font-black text-gray-900 leading-tight">
                    Welcome To Green Resort <span class="italic">Palembang</span>
                </h2>
            </div>
            
            <p class="font-bold text-gray-800 text-xl leading-snug border-l-4 border-resort-gold pl-6 py-1">
                Perumahan di Palembang dekat Jembatan Musi 2. Dikembangkan oleh Developer Terpercaya.
            </p>
            
            <div class="space-y-4 text-gray-600 leading-relaxed text-base text-justify font-light">
                <p>
                    Green Resort Palembang merupakan perumahan di Palembang yang mempunyai hunian rumah mewah, konsep lingkungan yang asri dan menawarkan kemudahan dalam melakukan aktivitas sehari-hari karena dekat dengan pusat Kota Palembang, jalan tol, bandara dan stasiun kereta api.
                </p>
                <p>
                    Ke depan, kawasan ini akan tumbuh pesat mengingat pembangunan infrastruktur yang pesat. Kami berkomitmen untuk menghadirkan standar hidup baru yang mengedepankan keamanan, privasi, dan harmoni dengan alam sekitarnya.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-6 pt-6">
                <div>
                    <h4 class="font-serif font-bold text-gray-900 text-lg">Visi Kami</h4>
                    <p class="text-xs text-gray-500 mt-2">Menjadi standar hunian prestisius di Sumatera Selatan.</p>
                </div>
                <div>
                    <h4 class="font-serif font-bold text-gray-900 text-lg">Misi Kami</h4>
                    <p class="text-xs text-gray-500 mt-2">Memberikan kualitas bangunan terbaik dan layanan prima.</p>
                </div>
            </div>
        </div>

        <div class="relative order-1 lg:order-2">
            <div class="absolute -top-6 -left-6 w-full h-full border-2 border-resort-gold z-0 hidden md:block"></div>
            <div class="relative z-10 overflow-hidden shadow-[0_30px_60px_rgba(0,0,0,0.15)]">
                <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750" alt="About Us" class="w-full h-[500px] object-cover hover:scale-110 transition-transform duration-700">
            </div>
            
        </div>
    </div>
</section>
@endsection