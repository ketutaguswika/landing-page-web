@extends('layouts.app')

@section('content')

    <section class="relative h-[60vh] flex items-center justify-center bg-gray-900 overflow-hidden">
    <div class="absolute inset-0 opacity-40">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" class="w-full h-full object-cover" alt="Background">
    </div>
    <div class="relative z-10 text-center text-white px-4">
        <h1 class="text-5xl md:text-8xl font-serif font-black uppercase tracking-tighter italic">
            Promo
        </h1>
        <div class="w-24 h-1 bg-resort-gold mx-auto mt-6"></div>
        <p class="mt-6 text-sm md:text-base tracking-[0.4em] uppercase font-light">The Story Behind Green Resort</p>
    </div>
</section>

<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <p class="text-resort-gold uppercase tracking-[0.2em] text-sm font-bold mb-2">Recent Update</p>
            <h2 class="text-4xl font-serif font-bold text-[#1e293b]">Promo</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 flex flex-col h-full group">
                <div class="overflow-hidden">
                    <img src="{{ asset('assets/images/promo/promo4.jpg') }}" alt="Promo Amayzing" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <h3 class="text-xl font-bold text-resort-green mb-3 leading-tight">AMAYZING: Saatnya Punya Rumah di Palembang bersama Pilihan Hadiahmu Sendiri!</h3>
                    <p class="text-gray-500 text-sm mb-6 flex-grow">Punya rumah impian bukan lagi sekadar wacana. Bulan ini, kamu bisa memilih hadiah langsung tanpa diundi.</p>
                    <a href="#" class="text-resort-green font-bold text-xs uppercase tracking-wider hover:text-resort-gold transition-colors">READ MORE »</a>
                </div>
                <div class="px-6 py-4 border-t border-gray-100 text-xs text-gray-400">
                    Mei 11, 2026
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 flex flex-col h-full group">
                <div class="overflow-hidden">
                    <img src="{{ asset('assets/images/promo/promo5.jpg') }}" alt="Promo Free PPN" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <h3 class="text-xl font-bold text-resort-green mb-3 leading-tight">Promo Free PPN 100% di Green Resort Palembang, Saat Terbaik Punya Rumah Impian!</h3>
                    <p class="text-gray-500 text-sm mb-6 flex-grow">Sedang mencari rumah dijual di Palembang dengan harga kompetitif dan fasilitas premium? Manfaatkan penawaran ini sekarang juga.</p>
                    <a href="#" class="text-resort-green font-bold text-xs uppercase tracking-wider hover:text-resort-gold transition-colors">READ MORE »</a>
                </div>
                <div class="px-6 py-4 border-t border-gray-100 text-xs text-gray-400">
                    April 13, 2026
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 flex flex-col h-full group">
                <div class="overflow-hidden">
                    <img src="{{ asset('assets/images/promo/promo6.jpg') }}" alt="Promo THR Ramadan" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <h3 class="text-xl font-bold text-resort-green mb-3 leading-tight">THR Ramadan Puluhan Juta dari Green Resort Palembang! Kesempatan Emas Punya Hunian Elit</h3>
                    <p class="text-gray-500 text-sm mb-6 flex-grow">Memiliki hunian nyaman di lokasi strategis tentu menjadi impian banyak keluarga. Dapatkan THR puluhan juta rupiah khusus bulan ini.</p>
                    <a href="#" class="text-resort-green font-bold text-xs uppercase tracking-wider hover:text-resort-gold transition-colors">READ MORE »</a>
                </div>
                <div class="px-6 py-4 border-t border-gray-100 text-xs text-gray-400">
                    Maret 9, 2026
                </div>
            </div>
        </div>
    </div>
</section>
@endsection