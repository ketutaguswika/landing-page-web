@props(['unit'])

<div class="bg-white shadow-md rounded-md overflow-hidden hover:shadow-xl transition-shadow flex flex-col group">
    <div class="h-64 overflow-hidden relative">
        <img src="{{ asset('assets/images/' . $unit->gambar) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="{{ $unit->nama_tipe }}">
        <div class="absolute top-4 left-4">
            <span class="bg-white/90 backdrop-blur text-resort-green px-3 py-1 text-[10px] font-bold rounded-sm uppercase tracking-widest shadow-sm">
                Premium Collection
            </span>
        </div>
    </div>
    
    <div class="p-6 flex-1 flex flex-col">
        <h3 class="text-xl font-serif font-bold text-gray-900 mb-1">{{ $unit->nama_tipe }}</h3>
        <p class="text-xs text-resort-gold font-bold uppercase tracking-widest mb-4">Green Resort Palembang</p>
        
        <div class="flex items-center gap-6 py-4 border-y border-gray-50 text-gray-500">
            <div class="flex items-center gap-2">
                <span class="text-gray-900 font-bold">{{ $unit->kamar_tidur }}</span>
                <span class="text-[10px] uppercase tracking-tighter">KT</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="text-gray-900 font-bold">{{ $unit->kamar_mandi }}</span>
                <span class="text-[10px] uppercase tracking-tighter">KM</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="text-gray-900 font-bold">{{ $unit->luas_bangunan }}</span>
                <span class="text-[10px] uppercase tracking-tighter">m²</span>
            </div>
        </div>

        <div class="mt-6">
            <a href="#" class="inline-block w-full bg-resort-green text-white text-center py-3 rounded-sm font-bold text-sm uppercase tracking-widest hover:bg-[#0a2342] transition-colors">
                Lihat Detail Unit
            </a>
        </div>
    </div>
</div>