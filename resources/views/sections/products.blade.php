<!-- resources/views/sections/products.blade.php -->
<section class="py-24 bg-gray-50 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-resort-gold uppercase tracking-[0.3em] text-xs font-bold mb-3">Our Residential</h2>
            <h3 class="text-3xl md:text-5xl font-serif font-black text-gray-900 leading-tight">Featured Units</h3>
            <p class="text-gray-500 max-w-2xl mx-auto italic mt-4 italic text-sm">Temukan tipe hunian yang paling sesuai dengan gaya hidup Anda</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            @forelse($units as $unit)
            <a href="{{ route('units.show', $unit->id) }}" class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-500 group flex flex-col h-full border border-gray-100">
                <div class="h-72 overflow-hidden relative">
                    <img src="{{ asset('assets/images/' . $unit->gambar) }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" 
                         alt="{{ $unit->nama_tipe }}">
                </div>

                <div class="py-6 px-4 text-center border-t border-gray-50">
                    <h3 class="text-gray-900 font-serif font-bold tracking-tight text-xl mb-1 group-hover:text-resort-gold transition-colors uppercase italic">
                        {{ $unit->nama_tipe }}
                    </h3>
                    <span class="text-[10px] text-gray-400 font-bold uppercase tracking-[0.2em]">View Details</span>
                </div>
            </a>
            @empty
            <div class="col-span-full py-20 text-center bg-white rounded-xl border-2 border-dashed border-gray-200">
                <p class="text-gray-400 italic">Belum ada unit yang tersedia saat ini.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>