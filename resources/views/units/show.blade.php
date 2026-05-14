@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative h-[60vh] overflow-hidden">
    <img src="{{ asset('assets/images/' . $unit->gambar) }}" class="w-full h-full object-cover" alt="{{ $unit->nama_tipe }}">
    <div class="absolute inset-0 bg-black/40 flex items-center">
        <div class="max-w-7xl mx-auto px-6 w-full mt-16">
            <nav class="flex mb-4 text-white/80 text-sm tracking-widest uppercase">
                <a href="{{ route('home') }}" class="hover:text-resort-gold transition-colors">Home</a>
                <span class="mx-2">/</span>
                <span class="text-resort-gold">Product Detail</span>
            </nav>
            <h1 class="text-5xl md:text-7xl font-serif font-black text-white uppercase tracking-tighter italic drop-shadow-lg">
                {{ $unit->nama_tipe }}
            </h1>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="py-20 px-6 bg-white">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-16">
        
        <!-- KOLOM KIRI: Spesifikasi & Deskripsi -->
        <div class="lg:col-span-2">
            
            <!-- Spesifikasi (Diperbaiki menjadi Grid agar responsive di Mobile) -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8 mb-12 border-b border-gray-100 pb-8">
                <div class="flex flex-col">
                    <span class="text-gray-400 text-[10px] uppercase tracking-[0.2em] mb-1">Land Area</span>
                    <span class="text-2xl font-bold text-gray-900">{{ $unit->luas_tanah }} <small class="text-sm font-normal">m²</small></span>
                </div>
                <div class="flex flex-col md:border-l border-gray-100 md:pl-8">
                    <span class="text-gray-400 text-[10px] uppercase tracking-[0.2em] mb-1">Building Area</span>
                    <span class="text-2xl font-bold text-gray-900">{{ $unit->luas_bangunan }} <small class="text-sm font-normal">m²</small></span>
                </div>
                <div class="flex flex-col md:border-l border-gray-100 md:pl-8">
                    <span class="text-gray-400 text-[10px] uppercase tracking-[0.2em] mb-1">Bedrooms</span>
                    <span class="text-2xl font-bold text-gray-900">{{ $unit->kamar_tidur }}</span>
                </div>
                <div class="flex flex-col md:border-l border-gray-100 md:pl-8">
                    <span class="text-gray-400 text-[10px] uppercase tracking-[0.2em] mb-1">Bathrooms</span>
                    <span class="text-2xl font-bold text-gray-900">{{ $unit->kamar_mandi }}</span>
                </div>
            </div>

            <!-- Deskripsi -->
            <div class="prose max-w-none text-gray-600 leading-relaxed text-justify">
                <h3 class="text-2xl font-serif font-bold text-gray-900 mb-6 uppercase tracking-widest">Experience the Luxury</h3>
                <p class="mb-4">
                    Unit <strong>{{ $unit->nama_tipe }}</strong> di Green Resort Palembang dirancang khusus untuk Anda yang mendambakan keseimbangan antara kemewahan modern dan lingkungan yang asri. Setiap sudut ruangan dimaksimalkan untuk sirkulasi udara dan cahaya alami yang melimpah.
                </p>
                <p>
                    Dilengkapi dengan material bangunan kualitas premium, unit ini menjadi investasi jangka panjang yang sangat bernilai di lokasi strategis Palembang.
                </p>
            </div>
        </div>

        <!-- KOLOM KANAN: Sticky Sidebar CTA -->
        <div class="lg:col-span-1">
            <div class="bg-resort-green p-8 rounded-xl shadow-2xl sticky top-28">
                <h4 class="text-resort-gold text-xs font-bold uppercase tracking-[0.3em] mb-2">Interested in this unit?</h4>
                <h3 class="text-white text-2xl font-serif font-bold mb-6 italic leading-snug">Miliki Hunian Impian Anda Sekarang</h3>
                
                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-4 text-white/80 text-sm">
                        <span class="text-resort-gold font-bold">✓</span>
                        <p>Konsultasi desain & interior gratis</p>
                    </div>
                    <div class="flex items-start gap-4 text-white/80 text-sm">
                        <span class="text-resort-gold font-bold">✓</span>
                        <p>Skema pembayaran fleksibel (KPR/Cash)</p>
                    </div>
                    <div class="flex items-start gap-4 text-white/80 text-sm">
                        <span class="text-resort-gold font-bold">✓</span>
                        <p>Cicilan 36x tanpa bunga</p>
                    </div>
                </div>

                <a href="https://wa.me/6282178878998?text=Halo,%20saya%20tertarik%20dengan%20unit%20{{ $unit->nama_tipe }}%20di%20Green%20Resort%20Palembang." 
                   target="_blank"
                   class="block w-full bg-resort-gold text-resort-green text-center py-4 rounded-lg font-black uppercase tracking-widest hover:bg-white transition-all duration-300 shadow-lg">
                    Contact Marketing
                </a>
                
                <p class="text-[10px] text-white/40 text-center mt-6 tracking-widest uppercase">
                    Green Resort Palembang &bull; {{ date('Y') }}
                </p>
            </div>
        </div>

    </div>
</section>
@endsection