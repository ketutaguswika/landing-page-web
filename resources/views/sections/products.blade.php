<section class="py-24 bg-gray-50 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#1e293b] mb-4">Our Products</h2>
            <p class="text-gray-500 max-w-2xl mx-auto italic">Search your type and suit for you</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            @forelse($units as $unit)
            <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-500 group flex flex-col h-full">
                
                <div class="h-72 overflow-hidden relative">
                    <img src="{{ asset('assets/images/' . $unit->gambar) }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" 
                         alt="{{ $unit->nama_tipe }}">
                    
                    
                </div>

                <div class="bg-resort-green py-5 px-4 text-center">
                    <h3 class="text-white font-bold tracking-[0.2em] uppercase text-sm">
                        {{ $unit->nama_tipe }}
                    </h3>
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center bg-white rounded-xl border-2 border-dashed border-gray-200">
                <p class="text-gray-400">Belum ada unit yang tersedia saat ini.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>