<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-4">
            <h2 class="text-5xl font-serif font-bold text-[#1e293b] mb-4">Promo</h2>
            <div class="w-45 h-1 bg-resort-green mx-auto mb-2"></div>
            <p class="text-gray-500 max-w-lg mx-auto text-sm md:text-base italic"> dapatkan promo menarik disini
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="group cursor-pointer">
                <div class="rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 border border-gray-200 bg-white">
                    <img src="{{ asset('assets/images/promo/promo4.jpg') }}" 
                         alt="Promo DP Rumah" 
                         class="w-full h-auto display-block group-hover:scale-105 transition-transform duration-700">
                </div>
            </div>
            
            <div class="group cursor-pointer">
                <div class="rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 border border-gray-200 bg-white">
                    <img src="{{ asset('assets/images/promo/promo5.jpg') }}" 
                         alt="Promo Free PPN" 
                         class="w-full h-auto display-block group-hover:scale-105 transition-transform duration-700">
                </div>
            </div>

            <div class="group cursor-pointer">
                <div class="rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 border border-gray-200 bg-white">
                    <img src="{{ asset('assets/images/promo/promo6.jpg') }}" 
                         alt="Promo THR" 
                         class="w-full h-auto display-block group-hover:scale-105 transition-transform duration-700">
                </div>
            </div>
        </div>
        
        <div class="mt-16 text-center">
            <a href="{{ route('promo') }}" class="inline-block bg-[#0f172a] text-white px-12 py-4 rounded-lg font-semibold hover:bg-resort-green transition-colors duration-300 shadow-lg tracking-wide">
                LIHAT SEMUA PROMO
            </a>
        </div>
    </div>
</section>